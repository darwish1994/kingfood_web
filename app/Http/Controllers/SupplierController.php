<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $supplies = Supply::where('user_id', Auth::user()->id)->get();
        return view('supply', compact('supplies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create_supply');

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

        $this->validate($request,[
            'name'=> 'required',
            'quantity'=> 'required',
            'price'=> 'required',
            'date'=> 'required',
        ]);


        $supply=new Supply();

        $supply->user_id=Auth::user()->id;

        $supply->name=$request->name;
        $supply->quantity=$request->quantity;
        $supply->price=$request->price;
        $supply->date=$request->date;
        $supply->details=$request->details;

        $supply->save();


        return redirect('supplier')->with('success','added supply success');


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

        Supply::find($id)->delete();

        return redirect()->back();

    }
}
