@extends('layouts.app')
<div class="container">
    <h1>Showing {{$shark->name}}</h1>
    <div class="jumbotron text-center">
        <h2>{{$shark->name}}</h2>
        <p>
            <strong class="pt-5">Email:</strong> {{$shark->email}} </br>
            <strong class="pt-5">Level:</strong>{{$shark->shark_level}}
        </p>
    </div>
</div>