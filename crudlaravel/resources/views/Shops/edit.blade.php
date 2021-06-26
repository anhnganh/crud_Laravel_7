@extends('layouts.app')
</br>
<div class="container">
<h1>Edit {{ $shop->name }}</h1>
<form action="{{ route('users.update', $shop->id) }}" method="POST">
@method('PATCH')
@csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input name="name" type="text" value="{{ $shop->name }}" >
    </div>
    <div class="form-group">
        <label for="email">Description:</label>
        <input type="text" value="{{ $shop->description }}" name="description" >
    </div>
    <div class="form-group">
        <label for="name">Image:</label>
        <input name="image" type="text" value="{{ $shop->image }}" >
    </div>
    
        <button >Edit the shop!</button>
    
</form>
</div>