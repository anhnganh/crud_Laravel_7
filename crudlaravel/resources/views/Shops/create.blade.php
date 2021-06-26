@extends('layouts.app')
<div class="container">
<h1>Create a Shops</h1>
  
    @foreach($user as $user=>$value)
        {{$value->id}}
    @endforeach
<form method="post" action="{{ route('shops.save') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description: </label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="form-group">
        <label for="shark_level">Image: </label>
        <input type="file" name="image" class="form-control">
    </div>

        <button type="submit" class="btn btn-primary">Add Shops</button>
    </form>
  
</div>


