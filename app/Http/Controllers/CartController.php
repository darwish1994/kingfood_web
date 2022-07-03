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

        $items = CartItem::where('user_id', Auth::user()->id)->join('product', 'cart_item.product_id', 'product.id')->select('cart_item.*', 'product.name')->get();
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

    public function removeFromCart($id)
    {

        $item = CartItem::find($id);

        if ($item->quantity == 1)
            $item->delete();
        else {
            $item->quantity--;
            $item->update();
        }

        return redirect()->back();

    }

    public function addToCart($id)
    {
        $item = CartItem::where('user_id', Auth::user()->id)->where('product_id', $id)->first();

        if ($item == null) {
            $newItem = new CartItem();
            $newItem->user_id = Auth::user()->id;
            $newItem->product_id = $id;
            $newItem->quantity = 1;
            $newItem->price = Product::find($id)->price;
            $newItem->save();

        } else {
            $item->quantity++;
            $item->update();
        }

        return redirect()->back();

    }


    /***api*
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */

    public function addToCartApi(Request $request, $id)
    {
        if (empty($request->user_id)) {
            $data["data"] = null;
            $data["message"] = "please login";
            return response()->json($data, 401);
        }


        $item = CartItem::where('user_id', $request->user_id)->where('product_id', $id)->first();


        if ($item == null) {
            $newItem = new CartItem();
            $newItem->user_id = Auth::user()->id;
            $newItem->product_id = $id;
            $newItem->quantity = $request->quantity;
            $newItem->price = Product::find($id)->price;
            $newItem->save();

            $data["data"] = $newItem;
        } else {
            $item->quantity = $request->quantity;
            $item->update();

            $data["data"] = $item;
        }

        return response()->json($data, 200);

    }


}
