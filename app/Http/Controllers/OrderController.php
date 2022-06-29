<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::where('user_id', Auth::user()->id)->join('order_item','order.id','order_item.order_id')->join('product', 'order_item.product_id', 'product.id')->select('order.*', 'order_item.quantity','product.name')->get();

        return view('order',compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function createNewOrder()
    {

        if (!Auth::check()) {
            return redirect('/');
        }

        $items = CartItem::where('user_id', Auth::user()->id)->join('product', 'cart_item.product_id', 'product.id')->select('cart_item.*', 'product.name')->get();


        if (!empty($items)) {
            $total = 0;
            foreach ($items as $item) {
                $total += $item->quantity * $item->price;
            }
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->total = $total;
            $order->save();

            foreach ($items as $item) {

                $orderItem=new OrderItem();
                $orderItem->order_id=$order->id;
                $orderItem->product_id=$item->product_id;
                $orderItem->quantity=$item->quantity;
                $orderItem->save();

                CartItem::find($item->id)->delete();

            }


        }

        return redirect('/');


    }
}
