<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfer = DB ::table('Transfer')->get();
        return view('transfer.index',compact('transfer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transfer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Tran_No '=>'required',
            'ACC_No_Source '=>'required',
            'ACC_No_Dest '=>'required',
            'DateOp'=>'required',
            'Amount'=>'required'
    ]);

    DB::table('Transfer')->insert([
        'Tran_No'=>$request->ACC_No,
        'ACC_No_Source'=>$request->Type_No,
        'ACC_No_Dest'=>$request->ACC_Name,
        'ACC_Surname'=>$request->ACC_Surname,
        'DateOp'=> now(),
        'Amount'=>$request->Amount
    ]);
    return redirect('transfer'); 
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
