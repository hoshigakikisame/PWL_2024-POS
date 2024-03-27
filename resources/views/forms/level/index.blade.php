@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Data User</h1>
                <a href="{{ url('level/tambah') }}">Tambah Level</a>
                <table border="1" cellpadding="2" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <td>Aksi</td>
                    </tr>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->level_id }}</td>
                        <td>{{ $d->level_kode }}</td>
                        <td>{{ $d->level_nama }}</td>
                        {{-- <td>{{ $d->level_id }}</td> --}}
                        <td>
                            <a href="">Ubah</a> |
                            <a href="">Hapus</a>
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