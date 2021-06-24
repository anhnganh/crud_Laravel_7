@extends('layouts.app')
</br>
<div class="container">
<h1>Edit {{ $shark->name }}</h1>
<form action="{{ route('sharks.update', $shark->id) }}" method="POST">
@method('PATCH')
@csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input name="name" type="text" value="{{ $shark->name }}" >
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" value="{{ $shark->email }}" name="email" >
    </div>
    <div class="form-group">
        <label for="name">shark_level:</label>
        <input name="shark_level" type="text" value="{{ $shark->shark_level }}" >
    </div>
    
        <button >Edit the shark!</button>
    
</form>
</div>