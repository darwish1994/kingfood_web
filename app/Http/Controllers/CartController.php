<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $items = CartItem::where('user_id', Auth::user()->id)->join('product','cart_item.product_id','product.id')->select('cart_item.*','product.name')->get();
        return view('cart', compact('items'));

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

    public function removeFromCart($id){

    }
    public function addToCart($id){
        $item = CartItem::where('user_id', Auth::user()->id)->where('product_id',$id)->first();

        if ($item == null){
            $newItem= new CartItem();
            $newItem->user_id=Auth::user()->id;
            $newItem->product_id=$id;
            $newItem->quantity=1;
            $newItem->price=Product::find($id)->price;
            $newItem->save();

        }else{
            $item->quantity++;
            $item->update();
        }

        return redirect()->back();

    }
}
