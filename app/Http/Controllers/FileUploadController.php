<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:500'
        ]);
        $extFile = $request->berkas->getClientOriginalName();
        $namaFile = 'web-'.time().".".$extFile;

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\", "//", $path);
        echo "Variable path berisi: $path <br>";

        $pathBaru = asset('gambar/'.$namaFile);
        echo "Proses upload berhasil, data disimpan pada: $path";
        echo "<br>";
        echo "Tampilkan link: <a href='$pathBaru'>$pathBaru</a>";
    }

    public function fileUploadRename() {
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename() {
        request()->validate([
            'filename' => 'required|max:255',
            'file' => 'required|file|image|max:500'
        ]);

        $file = request()->file('file');

        $ext = $file->getClientOriginalExtension();
        $newName = request()->filename . "." . $ext;
        $path = $file->storeAs('uploads', $newName);

        echo "Gambar berhasil di upload ke <a href='storage/$path'>$newName</a>";
        echo "<br><br>";
        echo "<img width=500 src='storage/$path'/>";
    }
}