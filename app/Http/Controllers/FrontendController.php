<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class FrontendController extends Controller
{
  public function index(Request $request)
  {
    $products = Product::latest()->limit(4)->get();
    
    return view('pages.frontend.index', compact('products'));
  }

  public function details(Request $request, $slug)
  {
    $product = Product::where('slug', $slug)->firstOrFail();
    $recommendations = Product::limit(4)->get();

    return view('pages.frontend.details', compact(['product', 'recommendations']));
  }

  public function product(Request $request)
  {
    $products = Product::latest()->get();

    return view('pages.frontend.product', compact('products'));
  }

  public function cart(Request $request)
  {
    $carts = Cart::where('users_id', Auth::user()->id)->get();
    
    return view('pages.frontend.cart', compact(['carts']));
  }

  public function cartDelete(Request $request, $id)
  {
    $item = Cart::findOrFail($id);
    $item->delete();
    return redirect('cart');
  }

  public function cartAdd(Request $request, $id)
  {
    Cart::create([
      'users_id' => Auth::user()->id,
      'products_id' => $id,
    ]);

    return redirect('cart');
  }

  public function checkout(CheckoutRequest $request)
  {
    // return $request->all();
    $data = $request->all();

    // Get data carts
    $carts = Cart::with(['product'])->where('users_id', Auth::user()->id)->get();

    // Add data transaction
    $data['users_id'] = Auth::user()->id;
    $data['total_price'] = $carts->sum('product.price');

    // Create transaction
    $transaction = Transaction::create($data);

    // Create transaction item
    foreach ($carts as $cart) {
      $item[] = TransactionItem::create([
        'users_id' => $cart->users_id,
        'products_id' => $cart->products_id,
        'transactions_id' => $transaction->id
      ]);
    }

    // Deleta cart after transaction
    Cart::where('users_id', Auth::user()->id)->delete();

    // Konfigurasi
    Config::$serverKey = config('services.midtrans.serverKey');
    Config::$isProduction = config('services.midtrans.isProduction');
    Config::$isSanitized = config('services.midtrans.isSanitized');
    Config::$is3ds = config('services.midtrans.is3ds');

    // Setup konfigurasi mitrans
    $midtrans = [
      'transaction_details' => [
        'order_id' => 'RES-' . $transaction->id,
        'gross_amount' => (int) $transaction->total_price
      ],
      'customer_details' => [
        'first_name' => $transaction->name,
        'email' => $transaction->email
      ],
      'enabled_payments' => ['gopay', 'bank_transfer'],
      'vtweb' => []
    ];

    // Payment process
    try {
      $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
      
      $transaction->payment_url = $paymentUrl;
      $transaction->save();

      return redirect($paymentUrl);
    }
    catch (Exception $e) {
      echo $e->getMessage();
    }
    
  }

  public function success(Request $request)
  {
    return view('pages.frontend.success');
  }
}
