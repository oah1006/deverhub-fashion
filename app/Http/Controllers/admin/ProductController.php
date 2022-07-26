<?php

namespace App\Http\Controllers\admin;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Support\Arr;
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
    public function index(Request $request)
    {
        $title = "List Product";

        $products = Product::withCount(['productVariants' => function($query) {
            $query->where('stock', );
        }]);
        $catalogs = Catalog::all();

        if ($request->filled('keywords')) {
            $q = $request->keywords;

            $products->where(function($query) use($q) {
                $query->where('title', 'like', '%'. $q . '%')
                      ->orWhere('catalog_id', 'like', '%' . $q . '%');
            });
        }

        if ($request->filled('stock')) {
            $q = $request->stock;
            $products->productVariants->where('stock', $q);
        }

        $products = $products->paginate(12)->withQueryString();



        return view("admin.product.index", compact('title', 'products', 'catalogs'));
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

        $sumStock = ProductVariants::where('product_id', $id)->sum('stock');
        $sumPrice = ProductVariants::where('product_id', $id)->sum('unit_price');

        $productVariant = $product->productVariants()->where('product_id', $id)->get();

        return view('admin.product.detail', compact('title', 'product', 'sumStock', 'sumPrice', 'productVariant'));
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
        $productVariant = $product->productVariants()->where('product_id', $id)->get();
        $catalogOptions = Catalog::all();


        return view('admin.product.edit', compact('title', 'product', 'catalogOptions', 'productVariant'));
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

        $product = Product::find($id);

        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'catalog_id' => $request->catalog_id,
        ]);

        // $variants = Arr::map($request->variants, function ($item) use ($product) {
        //     $item['product_id'] = $product->id;
        //     return $item;
        // });

        $product->productVariants()->delete();
        if ($request->variants)  {
            $product->productVariants()->upsert(
                $request->variants,
                ['sku'],
                ['unit_price', 'size', 'color', 'stock']
            );
        }


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

    public function destroyVariant($id) {
        $variant = ProductVariants::find($id);

        $variant->delete();

        return back()->with('msg', 'Update user successfully!');
    }
}
