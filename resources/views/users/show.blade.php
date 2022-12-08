@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="d-flex flex-row">
            <div class="p-2">Naam:</div>
            <div class="p-2">{{$user->name}}</div>
        </div>
        <div class="d-flex flex-row">
            <div class="p-2">Email:</div>
            <div class="p-2">{{$user->email}}</div>
        </div>
        <a class="btn btn-primary" href="{{route("users.index")}}">Terug naar de overzicht</a>
        <a class="btn btn-primary" href="{{route("users.edit", ["user"=>$user->id])}}">Profiel bewerken</a>
    </div>
@endsection


