@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col fw-bold">Name</div>
            <div class="col fw-bold">Age</div>
            <div class="col fw-bold">Gender</div>
            <div class="col fw-bold">Email</div>
        </div>
        @foreach($data as $testData)
            <div class="row">
                <div class="col">{{$testData["name"]}}</div>
                <div class="col">{{$testData["age"]}}</div>
                <div class="col">{{$testData["gender"]}}</div>
                <div class="col">{{$testData["email"]}}</div>
            </div>
            <hr>
    @endforeach
        <a class="btn btn-success" href="{{route('json.create')}}">Persoon toevoegen</a>
    </div>
@endsection
