@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            @if (session()->has('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-1 fw-bold">ID</div>
            <div class="col fw-bold">Naam</div>
            <div class="col fw-bold">Email</div>
            <div class="col-2 fw-bold ">Actions</div>
        </div>
        @foreach($users as $user)
            <div class="row">
                <div class="col-1">{{$user->id}}</div>
                <div class="col">{{$user->name}}</div>
                <div class="col">{{$user->email}}</div>
                <div class="col-2">
                    <form action="{{route("users.destroy", $user->id)}}" class="float-end" method="post">
                        <a class="btn btn-primary" href="{{route('users.show', $user->id)}}">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a class="btn btn-primary" href="{{route("users.edit", $user->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash delete"></i></button>
                    </form>
                </div>
            </div>
        @endforeach
        <div class="mt-1"> {{$users->links('pagination::bootstrap-5')}}</div>
        <a class="btn btn-success" href="{{route("users.create")}}">Gerbuiker toevoegen</a>
    </div>
@endsection


