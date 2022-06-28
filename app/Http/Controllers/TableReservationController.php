<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\TableReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TableReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!Auth::check())
            return redirect('login')->with('error', "login required");


        $tables = Table::where('reserved', 0)->get();

        return view('reservation', compact('tables'));

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
        $this->validate($request,[
            'name'=>"required",
            'phone'=>"required",
            'table_id'=>"required",
            'time'=>"required",
        ]);

        $reservation= new TableReservation();
        $reservation->user_id= Auth::user()->id;
        $reservation->table_id= $request->table_id;
        $reservation->date= $request->time;
        $reservation->name= $request->name;
        $reservation->phone= $request->phone;
        $reservation->num_persons= $request->num_persons;
        $reservation->save();


        $table=Table::find($request->table_id);
        $table->reserved=1;
        $table->update();


        return redirect('/')->with('success','table has been reserved');





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
}
