@extends('layouts.app')
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

<h1>Create a shark</h1>

<form method="post" action="{{ route('sharks.store') }}">

    @csrf
    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email: </label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="shark_level">shark_level: </label>
        <input type="text" name="shark_level" class="form-control">
    </div>

        <button type="submit" class="btn btn-primary">Add Shark</button>
    </form>
</div>