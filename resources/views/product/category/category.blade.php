@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $category }}</h1>
                <p>{{ $category }} content goes here</p>
            </div>
        </div>
    </div>
@endsection