<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function edit($id)
    {
        $data = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $data]);
    }

    public function delete($id)
    {
        $data = KategoriModel::find($id);
        $data->delete();
        return redirect('/kategori');
    }

    public function update(Request $request, $id)
    {
        $data = KategoriModel::find($id);
        $data->kategori_kode = $request->kodeKategori;
        $data->kategori_nama = $request->namaKategori;
        $data->save();
        return redirect('/kategori');
    }
    public function create(): View
    {
        return view('kategori.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // The incoming request is valid...

        // Retrieve the validated input data
        $validated = $request->validated();

        // Retrieve a portion of the validated input data
        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']);

        // Store the post
        return redirect('/kategori');
    }
}


// public function index()
// {
//     /* $data = [
//         'kategori_kode' => 'SNK',
//         'kategori_nama' => 'Snack/Makanan    Ringan',
//         'created_at' => now()
//     ];
//     DB::table('m_kategori')->insert($data);
//     return 'Insert data baru berhasil'; */

//     // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
//     // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

//     // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
//     // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

//     $data = DB::table('m_kategori')->get();
//     return view('kategori', ['data' => $data]);
// }
