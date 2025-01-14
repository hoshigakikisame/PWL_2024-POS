@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($penjualan)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
            Data yang Anda cari tidak ditemukan.
        </div>
        @else
        <table class="table table-bordered table-striped table-hover table-sm">
            <tr>
                <th>ID</th>
                <td>{{ $penjualan->penjualan_id }}</td>
            </tr>
            <tr>
                <th>Kasir</th>
                <td>{{ $penjualan->user->nama }}</td>
            </tr>
            <tr>
                <th>Kode Penjualan</th>
                <td>{{ $penjualan->penjualan_kode }}</td>
            </tr>
            <tr>
                <th>Pembeli</th>
                <td>{{ $penjualan->pembeli }}</td>
            </tr>
            <tr>
                <th>Tanggal Penjualan</th>
                <td>{{ $penjualan->penjualan_tanggal }}</td>
            </tr>
        </table>
        @endempty
    </div>
</div>
<div class="card card-outline card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">Detail Barang Penjualan</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($penjualan_detail)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
            Data yang Anda cari tidak ditemukan.
        </div>
        @else
        <table class="table table-bordered table-striped table-hover table-sm">
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Image</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
            <?php $idx = 1; ?>
            @foreach ($penjualan_detail as $dt)
            <tr>
                <td>{{ $idx++ }}</td>
                <td>{{ $dt->barang->barang_nama }}</td>
                <td>
                    <img src="{{ asset($dt->barang->image) }}" alt="{{ $dt->barang->barang_nama }}" class="img-thumbnail" width="100">
                </td>
                <td>{{ $dt->jumlah }}</td>
                <td>{{ $dt->harga }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="card mx-3">
        <div class="card-body">
            <h2 class="font-weight-bolder">Grand Total :  
                <span>{{ Number::currency($total, 'IDR') }}</span>
            </h2>
        </div>
    </div>
    @endempty
    <a href="{{ url('penjualan') }}" class="btn btn-sm btn-info">Kembali</a>
</div>

@endsection

@push('css')
@endpush

@push('js')
@endpush