@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('json.saveJson')}}" method="post">
            {!! csrf_field() !!}
        <div class="d-flex m-1">
            <div class="col-1 fw-bold">Name:</div>
            <div class="col">
                <input type="text" name="name">
            </div>
        </div>
        <div class="d-flex m-1">
            <div class="col-1 fw-bold">Age:</div>
            <div class="col">
                <input type="text" name="age">
            </div>
        </div>
        <div class="d-flex m-1">
            <div class="col-1 fw-bold">Gender:</div>
            <div class="col">
                <input type="text" name="gender">
            </div>
        </div>
        <div class="d-flex m-1">
            <div class="col-1 fw-bold">Email:</div>
            <div class="col">
                <input type="text" name="email">
            </div>
        </div>
            <input class="btn btn-primary" type="submit" value="Toevoegen">
        </form>
    </div>
@endsection
