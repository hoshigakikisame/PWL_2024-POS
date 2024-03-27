@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">m_user form</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control">
                                <option>Administrator</option>
                                <option>Manager</option>
                                <option>Staff/Kasir</option>
                                <option>Customer</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Enter Nama">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
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
