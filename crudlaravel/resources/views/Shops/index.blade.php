 <!-- <div>{{$ModelsShops}}</div>  -->
@extends('layouts.app')
<div class="container">
<h1>All the Shops</h1>



<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
        <li><a href="">Create a Shops</a>
    </ul>
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
</nav>
@foreach($ModelsShops as $ModelsShops=>$value)
<table class="table table-striped table-bordered"> 
    <thread><table class="table table-striped table-bordered"> 
    <thread>
        <tr>
          
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>San pham </td>
            <td>Actions</td>
        </tr>
    </thread>
     <tbody>
      
        <tr>
         
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->description}}</td>
            <td>{{$value->amout}}</td>
            <td>
                <a class="btn btn-small btn-success" href="">Show this Shops</a>
                <a class="btn btn-small btn-info" href="{{ route('users.edit', $value->id) }}">Edit this Shops</a>
               <form action="{{ route('users.destroy', $value->id) }}" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Delete</button>
               </form>
            </td>
        </tr>
      
     </tbody>   
    
</table>
@endforeach