@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Data User</h1>
                <a href="{{ url('user/tambah') }}">Tambah User</a>
                <table border="1" cellpadding="2" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>ID Level Pengguna</th>
                        <td>Aksi</td>
                    </tr>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->user_id }}</td>
                        <td>{{ $d->username }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->level_id }}</td>
                        <td>
                            <a href="{{ url('user/ubah/'.$d->user_id) }}">Ubah</a> |
                            <a href="{{ url('user/hapus/'.$d->user_id) }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <td>{{ $data->user_id }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->level_id }}</td>
                    </tr> --}}
                    {{-- <tr>
                        <td>Jumlah Pengguna</td>
                    </tr>
                    <tr>
                        <td>{{ $data }}</td>
                    </tr> --}}
                </table>
            </div>
        </div>
    </div>
@endsection