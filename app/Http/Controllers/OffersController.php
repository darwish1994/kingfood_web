<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers=Offer::all();
        return view('offers',compact('offers'));
    }


    public function getAllOffers(){
        $offers=Offer::all();

        $data["data"]=$offers;

        return response()->json($data,200);

    }


}
