<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      if(request()->ajax()){
        $query = Product::query();

        return DataTables::of($query)
          ->addColumn('action', function($item){
            return '
                  <a href="'. route('dashboard.product.edit', $item->id) .'" class="inline-block border border-gray-500 bg-gray-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-gray-700 focus:outline-none focus:shadow-outline">
                    Edit
                  </a>
                  <form class="inline-block" action="'. route('dashboard.product.destroy', $item->id) .'" method="POST">
                    <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-700 focus:outline-none focus:shadow-outline">Hapus</button>
                    '. method_field('delete') . csrf_field().'
                  </form>
                  ';
          })
          ->editColumn('price', function($item){
              return number_format($item->price);
          })
          ->rawColumns(['action'])
          ->make();
      }

      return view('pages.dashboard.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('pages.dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
      // return Request()->all();
      // photo
      $file = $request->file('file');
      
      $data = request()->all();
      $data['slug'] = Str::slug($request->name);
      $data['photo_url'] = $file->store('public/gallery');

      Product::create($data);

      return redirect()->route('dashboard.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
      return view('pages.dashboard.product.edit', [
        'item' => $product
      ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
      $file = $request->file('file');
      
      $data = $request->all();
      $data['slug'] = Str::slug($request->name);
      $data['photo_url'] = $file->store('public/gallery');

      $product->update($data);
      return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
      $product->delete();
      if(Storage::exists($product->photo_url)) {
          Storage::delete($product->photo_url);
      }
      
      return redirect()->route('dashboard.product.index');
    }
}
