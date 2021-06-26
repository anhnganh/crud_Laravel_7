<?php

namespace App\Http\Controllers;
use App\ModelsShops;
use Illuminate\Http\Request;
use App\User;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Shops.create');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = User::find($id);
        // $shop = new ModelsShops();
        // $shop->name="abcddasdasdas";
        // $shop->description="adasd";
        // $shop->amout="222";
        // $shop->image="image.png";
        // $user->shops()->save($shop);
        // return "oke";
        $shop = new ModelsShops;
        $shop->name = $request->name;
        $shop->description=$request->description;
        $shop->image = $request->image;
        $shop->save();
        return redirect('Shops.index');

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
        // $user = ModelsShops::find($id)->user;
        // return $user;
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
        $shop = ModelsShops::find($id);
        return view('Shops.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsShops $model)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        $model->update(($request->all));
        return redirect('Shops.index');
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
