@extends('layouts.backend-skeleton')

@section('content')

    <div class="jumbotron">
        <h1 class="display-1 text-center">Dashboard</h1>

        <div class="card-body text-center">

            <h3>Welcome, {{Auth::user()->name}}</h3>

            @if(Session::has('success_message'))
                <div class="alert alert-success" role="alert">
                    <em> {!! session('success_message') !!}</em>
                </div>
            @endif

            @if(Session::has('info_message'))
                <div class="alert alert-info" role="alert">
                    <em> {!! session('info_message') !!}</em>
                </div>
            @endif  

            @if(Session::has('warning_message'))
                <div class="alert alert-warning" role="alert">
                    <em> {!! session('warning_message') !!}</em>
                </div>
            @endif

            @if(Session::has('danger_message'))
                <div class="alert alert-danger" role="alert">
                    <em> {!! session('danger_message') !!}</em>
                </div>
            @endif  
            
        </div>
    </div>

@endsection

