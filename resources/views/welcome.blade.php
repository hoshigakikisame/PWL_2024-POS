@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <ul>
        <li><a href="{{ url('/forms/general') }}">General Elements</a></li>
        <li><a href="{{ url('/forms/advanced') }}">Advanced Elements</a></li>
        <li><a href="{{ url('/forms/editors') }}">Editors</a></li>
        <li><a href="{{ url('/forms/validation') }}">Validation</a></li>
    </ul>
@stop
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
