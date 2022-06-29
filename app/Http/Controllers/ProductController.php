<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getAllProducts(){

        $product=Product::all();

        $data["data"]= $product;

        return response()->json($data,200);


    }

}
