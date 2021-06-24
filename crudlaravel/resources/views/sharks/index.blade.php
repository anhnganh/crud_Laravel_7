<div class="container">
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('sharks') }}">shark Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('sharks') }}">View All sharks</a></li>
        <li><a href="{{ URL::to('sharks/create') }}">Create a shark</a>
    </ul>
</nav>
@extends('layouts.app')
<h1>All the sharks</h1>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<table class="table table-striped table-bordered"> 
    <thread>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>shark levels</td>
            <td>Actions</td>
        </tr>
    </thread>
     <tbody>
        @foreach($sharks as $shark=>$value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->shark_level}}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('sharks/' . $value->id) }}">Show this shark</a>
                <a class="btn btn-small btn-info" href="{{ route('sharks.edit', $value->id) }}">Edit this shark</a>
               <form action="{{ route('sharks.destroy', $value->id) }}" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Delete</button>
               </form>
            </td>
        </tr>
        @endforeach
     </tbody>   
    
</table>
</div>