<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload() {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request) {

        $request->validate([
            'berkas'=>'required|file|image|max:5000',]);
            $extfile=$request->berkas->getClientOriginalName();
            $namaFile='web'.time().".".$extfile;

            $path = $request->berkas->move('gambar', $namaFile);
            $path = str_replace("\\","//", $path);
            echo "Variabel path berisi:$path <br>";

            $pathBaru=asset('storage/'.$namaFile);
            echo "proses upload berhasil, file berada di: $path";
            echo "<br>";
            echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
    }

    public function fileUploadRename()
    {
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:5000']);
            $extFile = $request->berkas->extension();
            $nameFile = $request->namaGambar . '.' . $extFile;

            $path = $request->berkas->move('gambar', $nameFile);
            $path = str_replace("\\", "//", $path);
    
            $pathBaru = asset('gambar/' . $nameFile);
    
            echo "Gambar berhasil di upload ke <a href='$pathBaru'>$nameFile</a>";
            echo "<br>";
            echo "<img src='$pathBaru'>";

    }
}

// if($request->hasFile('berkas')) {
//     echo "path(): ".$request->berkas->path();
//     echo "<br>";
//     echo "extension(): " .$request->berkas->extension();
//     echo "<br>";
//     echo "geClientOriginalExtension(): ".
//         $request->berkas->getClientOriginalExtension();
//     echo "<br>";
//     echo "getMimeType(): ".$request->berkas->getMimeType();
//     echo "<br>";
//     echo "getClientOriginalName(): ".
//         $request->berkas->getClientOriginalName();
//     echo "<br>";
//     echo "getSize(): ".$request->berkas->getSize();
// } else {
//     echo "Tidak ada berkas yang diupload";
// }