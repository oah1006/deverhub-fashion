<?php

namespace App\Http\Controllers\admin;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductVariants;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\admin\UpdateProductRequest;

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

        $catalogOptions = Catalog::all();

        return view('admin.product.create', compact('title', 'catalogOptions', 'products'));
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
            'description' => $request->description,
            'catalog_id' => $request->catalog_id,
        ]);

        foreach ($request->variant as $item) {
            $productVariants = $product->productVariants()->create([
                'sku' => $item['sku'],
                'stock' => $item['stock'],
                'unit_price' => $item['unit_price'],
                'color' => $item['color'],
                'size' => $item['size']
            ]);
    
        }


        $product->save();
        $productVariants->save();

        

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


        return view('admin.product.edit', compact('title', 'product', 'catalogOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $productId = Product::find($id);
        $product = $productId->update([
            'title' => $request->title,
            'sku' => $request->sku,
            'description' => $request->description,
            'catalog_id' => $request->catalog_id,
            'stock' => $request->stock,
            'unit_price' => $request->unit_price,
        ]);

        $productVariants = ProductVariants::find($productId)->insert([
            'color' => $request->color,
            'price' => $request->price,
        ]);

        return back()->with('msg', 'Update user successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('admin.products.index')->with('msg', 'Delete product successfully!');
    }
}
