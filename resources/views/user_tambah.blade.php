@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post" action="{{ url('user/tambah_simpan') }}">
                    {{ csrf_field() }}
                    <h1>Tambah User</h1>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                        <br>
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                        <br>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <br>
                        <label for="level_id">Level Pengguna</label>
                        <input type="number" name="level_id" id="level_id" class="form-control">
                        <br><br>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection