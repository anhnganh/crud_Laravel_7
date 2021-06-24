<?php

namespace App\Http\Controllers;

use App\shark;
use Illuminate\Http\Request;


class sharkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        // $shark = new shark;
        // $shark->name='AnhDuc';
        // $shark->email='dochungbh123@gmail.com';
        // $shark->shark_level='10';
        // $shark->save();

        $sharks = shark::all();
         return view('sharks.index',['sharks'=>$sharks])->with('sharks',$sharks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sharks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $shark = new shark;
        $shark->name = $request->name;
        $shark->email=$request->email;
        $shark->shark_level=$request->shark_level;
        $shark->save();
        return redirect()->route('sharks.index')->with('success', 'shark saved!');
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
        $shark = shark::find($id);
        return view('sharks.show')->with('shark',$shark);
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
        $shark=shark::find($id);
        return view('sharks.edit',compact('shark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,shark $shark)
    {
        //
       
        $request->validate([
            'name'=>'required',
             'email'=>'required',
             'shark_level'=>'required'
        ]);
        $shark->update($request->all());
        // $shark = shark::find($id);
        // $shark->name = $request->get('name');
        // $shark->email = $request->get('email');
        // $shark->shark_level=$request->get('shark_level');
        // $shark->save();
       return redirect()->route('sharks.index')->with('success','sharks updated successfully');

     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(shark $shark)
    {
        //
        $shark->delete();
        return redirect()->route('sharks.index')->with('success','shark deleted successfully');
    }
}
