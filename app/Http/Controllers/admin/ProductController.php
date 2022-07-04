<?php

namespace App\Http\Controllers\admin;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "List Product";

        $products = Product::all();

        return view("admin.product.index", compact('title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create Product";

        $products = Product::all();

        $catalogOptions = Catalog::where('parent_id', null)->get();

        return view('admin.product.create', compact('title', 'catalogOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = Product::create([
            'title' => $request->title,
            'sku' => $request->sku,
            'description' => $request->description,
            'catalog_id' => $request->catalog_id,
            'stock' => $request->stock,
            'unit_price' => $request->unit_price,
        ]);

        $product->save();

        return redirect()->route('admin.products.index')->with('msg', 'Add product successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Detail product';

        $product = Product::find($id);

        return view('admin.product.detail', compact('title', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit product";

        $product = Product::find($id);
        $catalogOptions = Catalog::where('parent_id', null)->get();


        return view('admin.product.edit', compact('title', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
