<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ACCTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acctype = DB ::table('ACCType')->get();
        return view('acctype.index',compact('acctype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acctype.create');
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
                'Type_Name '=>'required',
                'DateBegin'=>'required',
                'DateEnd'=>'required',
                'Rate'=>'required'
        ]);

        DB::table('ACCType')->insert([
            'Tran_No'=>$request->Tran_No,
            'Type_Name'=>$request->ACC_No,
            'DateBegin'=>now(),
            'DateEnd'=>now(),
            'Rate'=>$request->Rate,
        ]);
        return redirect('acctype');    
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