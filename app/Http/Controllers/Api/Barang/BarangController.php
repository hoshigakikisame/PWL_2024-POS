<?php

namespace App\Http\Controllers\Api\Barang;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        return BarangModel::all();
    }

    public function store(Request $request) {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $request->file('image')->storeAs('posts', $request->image->hashName());
            $data['image'] = $request->image->hashName();
        }

        $barang = BarangModel::create($data);
        return response()->json($barang, 201);
    }

    public function show(BarangModel $barang) {
        return BarangModel::find($barang);
    }

    public function update(Request $request, BarangModel $barang) {
        $data = $request->all();
        dd($request->image->hashName());
        if ($request->hasFile('image')) {
            $data['image'] = $request->image->hashName();
            $request->image->store('posts');
        }
        $barang->update($data);
        return BarangModel::find($barang);
    }

    public function destroy(BarangModel $barang) {
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ], 200);
    }
}
