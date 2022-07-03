<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getAllProducts()
    {

        $product = Product::all();

        $data["data"] = $product;

        return response()->json($data, 200);

    }

    public function getProductById(Request $request, $id)
    {

        if (empty($request->user_id)) {
            $data["data"] = null;
            $data["message"] = "please login";
            return response()->json($data, 401);
        }

        $product = Product::find($id);

        $cart = CartItem::where('product_id', $id)->where('user_id', $request->user_id)->first();

        dd($cart);

        $product->quantity = $cart->quantity ?: 0 ;

        $data["data"] = $product;

        return response()->json($data, 200);


    }


}
