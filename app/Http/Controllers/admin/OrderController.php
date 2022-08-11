<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateOrderRequest;
use App\Http\Requests\Admin\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "List Order";

        $orders = Order::all();

        return view("admin.order.index", compact('title', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Order';

        $userOptions = User::where('role', 'customer')->get();

        return view('admin.order.create', compact('title', 'userOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrderRequest $request)
    {

        $user = User::where('id', $request->customer_id)->first();



        $order = Order::create([
            'customer_id' => $request->customer_id,
            'email' => $user->email,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'gender' => $user->gender,
            'total' => 0,
            'sub_total' => 0,
            'shipping_fee' => 0
        ]);

        
        // $order = $user->order()->create([
        //     'email' => $user->email,
        //     'first_name' => $user->first_name,
        //     'last_name' => $user->last_name,
        //     'gender' => $user->gender
        // ]);

        // dump($order);

        $order->save();
        return redirect()->route('admin.order.index')->with('msg', 'Add orders successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Detail Order";
        $order = Order::findOrFail($id);

        return view('admin.order.detail', compact('title' ,'order'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Order";

        $order = Order::findOrFail($id);

        return view('admin.order.edit', compact('title', 'order'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $id)
    {

        $order = Order::findOrFail($id);
        
        $data = $request->validated();


        $order->fill($data);
        $order->calculateBill(['shipping_fee' => $data['shipping_fee']]);

        $order->save();

        
        return back()->with('msg', 'Update Order Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('msg', 'Delete order successfully!');
    }
}
