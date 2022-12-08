@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @guest
                        U bent niet ingelogd
                    @else
                        U bent ingelogd
                            <br>
                        In de navbar staat users page
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
