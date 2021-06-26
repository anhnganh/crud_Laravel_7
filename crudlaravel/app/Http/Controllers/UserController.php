<?php

namespace App\Http\Controllers;
use App\ModelsShops;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\QueryException;
class UserController extends Controller
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
    public function create(){
        //
    //   $user = ModelsShops::find($id);   
    //   return view('Shops.create', compact('user'));
  
    }
    
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
        */
        public function store(Request $request,$id)
        {
       
         $user = User::find($id);
         $shop = new ModelsShops();
         $shop->name="abcddasdasdas";
         $shop->description="adasd";
         $shop->amout="222";
         $shop->image="image.png";
        $user->shops()->save($shop);
        return "oke";
       

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
        $ModelsShops= User::find($id)->shops;
        return view('Shops.index',compact('ModelsShops'))->with('ModelsShops',$ModelsShops);
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
        $shop= ModelsShops::find($id);
        return view('Shops.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $shop= ModelsShops::find($id);
        // $request->validate([
        //     'name'=>'required',
        //     'description'=>'required',
        //     'image'=>'required',
        //    'user_id' => auth()->id()
        // ]);
        $shop->name = $request->name;
        $shop->description=$request->description;
        $shop->image=$request->image;
        $shop->save();
        return redirect()->route('users.show')->with('sucess','update sucess');
       // return "abc";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // $user= User::find($id);
        // $user->shops()->deleting();
        // echo "abc";
        // return redirect()->route(('users.show'))->with('success','delete success');
        
        $shops = ModelsShops::find($id);
        $shops->delete();
        return view('Shops.index');
    }
}

