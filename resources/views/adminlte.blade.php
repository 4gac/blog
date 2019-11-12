@extends('adminlte::page')
@section('title', 'Admin Dash')

@section('content_header')

    <h1>Vítaj, {{Auth::user()->role }} {{Auth::user()->name }}</h1>
    
    
    @if (session('status'))
    <div class="alert alert-success" role="alert">
    {{ session('status') }}  
    </div>
    @endif


@stop

@section('content')

<p></p>

@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')

@stop