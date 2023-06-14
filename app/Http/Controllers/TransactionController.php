<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      if(request()->ajax()){
        $query = Transaction::query();

        return DataTables::of($query)
          ->addColumn('action', function($item){
            return '<a href="'. route('dashboard.transaction.show', $item->id) .'" class="inline-block border border-green-500 bg-green-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-green-700 focus:outline-none focus:shadow-outline">
                    Show
                  </a>
                  <a href="'. route('dashboard.transaction.edit', $item->id) .'" class="inline-block border border-gray-500 bg-gray-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-gray-700 focus:outline-none focus:shadow-outline">
                    Edit
                  </a>
                  ';
          })
          ->editColumn('total_price', function($item){
              return number_format($item->total_price);
          })
          ->rawColumns(['action'])
          ->make();
      }

      return view('pages.dashboard.transaction.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Transaction $transaction)
    {
      if (request()->ajax()) {
          $query = TransactionItem::with(['product'])->where('transactions_id', $transaction->id);

          return DataTables::of($query)
              ->editColumn('product.price', function ($item) {
                  return number_format($item->product->price);
              })
              ->make();
      }

      return view('pages.dashboard.transaction.show', compact('transaction'));
  }

    public function edit(Transaction $transaction)
    {
      return view('pages.dashboard.transaction.edit', compact('transaction'));
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
      $data = $request->all();

      $transaction->update($data);
      return redirect()->route('dashboard.transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
