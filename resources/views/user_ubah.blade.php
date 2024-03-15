@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Form Ubah Data User</h1>
                <form method="post" action="{{ url('user/ubah_simpan', $data->user_id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{ $data->username }}">
                        <br>
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $data->nama }}">
                        <br>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" value="{{ $data->password }}">
                        <br>
                        <label for="level_id">Level Pengguna</label>
                        <input type="number" name="level_id" id="level_id" class="form-control" value="{{ $data->level_id }}">
                        <br><br>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection