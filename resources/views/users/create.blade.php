@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route("users.store")}}" method="post">
            {!! csrf_field() !!}
            <div class="d-flex flex-row">
                <div class="p-2">Naam:</div>
                <div class="p-2"><input type="text" name="name" placeholder="Naam"></div>
            </div>
            <div class="d-flex flex-row">
                <div class="p-2">Email:</div>
                <div class="p-2"><input type="text" name="email" placeholder="Email"></div>
            </div>
            <div class="d-flex flex-row">
                <div class="p-2">Wachtwoord:</div>
                <div class="p-2"><input type="text" name="password" placeholder="Wachtwoord"></div>
            </div>
            <a class="btn btn-primary" href="{{route("users.index")}}">Terug naar de overzicht</a>
            <input class="btn btn-primary" type="submit" name="save" value="Toevoegen">
        </form>
    </div>
@endsection
