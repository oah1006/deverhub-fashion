<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $orderId)
    {
        $title = 'List Items';

        $order = Order::findOrFail($orderId);
        $orderItems = OrderItems::all();

        $items = $order->items();

        return view('admin.order.item.index', compact('title', 'items', 'order', 'orderItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($orderId)
    {
        $title = "Create Item";
        $order = Order::findOrFail($orderId);
        $productOptions = Product::all();
       
        return view('admin.order.item.create', compact('title', 'order', 'productOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
