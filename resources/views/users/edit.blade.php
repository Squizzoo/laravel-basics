@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route("users.update", [$user->id])}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <div class="d-flex flex-row">
                <div class="p-2">Naam:</div>
                <div class="p-2"><input type="text" name="name" value="{{$user->name}}"></div>
            </div>
            <div class="d-flex flex-row">
                <div class="p-2">Email:</div>
                <div class="p-2"><input type="text" name="email" value="{{$user->email}}"></div>
            </div>
            <a class="btn btn-primary" href="{{route("users.index")}}">Terug naar de overzicht</a>
            <input class="btn btn-primary" type="submit" name="save" value="Update">
        </form>
    </div>
@endsection
