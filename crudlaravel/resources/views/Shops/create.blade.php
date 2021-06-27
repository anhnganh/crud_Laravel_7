@extends('layouts.app')
<div class="container">
<h1>Create a Shops</h1>
  
  
<form method="post" action="{{ route('shops.add', $user) }}">
    @csrf
    @method('GET')
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


