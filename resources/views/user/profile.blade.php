@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>User Profile</h1>
                </p>Id: {{ $id }}</p>
                <p>Name: {{ $name }}</p>
            </div>
        </div>
    </div>
@endsection