@extends('layouts.app')
</br>
<div class="container">
<h1>Edit {{ $shop->name }}</h1>
<form action="{{ route('shops.update', $shop->id) }}" method="POST">
@method('PATCH')
@csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input name="name" type="text" value="{{ $shop->name }}" >
    </div>
    <div class="form-group">
        <label for="email">Description:</label>
        <input type="text" value="{{ $shop->email }}" name="description" >
    </div>
    <div class="form-group">
        <label for="name">Image:</label>
        <input name="image" type="text" value="{{ $shop->shark_level }}" >
    </div>
    
        <button >Edit the shark!</button>
    
</form>
</div>