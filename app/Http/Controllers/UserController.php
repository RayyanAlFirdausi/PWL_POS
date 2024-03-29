<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}



// $user = UserModel::create(
//     [
//         'username' => 'manager19',
//         'nama' => 'Manager11',
//         'password' => Hash::make('12345'),
//         'level_id' => 2,
//     ],
// );
// $user->username = 'manager20';

// $user->save();

// $user->wasChanged(); // true
// $user->wasChanged('username'); // true
// $user->wasChanged(['username', 'level_id']); // true
// $user->wasChanged('nama'); // false
// $user->wasChanged(['nama', 'username']); // true

// return view('user', ['data' => $user]);


// $data = [
//     'level_id' => 2,
//     'username' => 'manager_tiga',
//     'nama' => 'Manager 3',
//     'password' => Hash::make('12345')
// ];
// UserModel::create($data);

// $user = UserModel::all();
// return view('user', ['data' => $user]);


// // Coba akses model UserModel
// $user = UserModel::all(); // AMbil semua data dari tabel m_user
// return view('user', ['data' => $user]);


// Tambah data user dengan ELoquent Model
// $data = [
//     'username' => 'customer-1',
//     'nama' => 'Pelanggan',
//     'password' => Hash::make('12345'),
//     'level_id' => 4
// ];
// UserModel::insert($data);   // tambah data ke tabel m_user


// tambahkan data user dengan Eloquent Model
// $data = [
//     'nama' => 'Pelanggan Pertama',
// ];
// UserModel::where('username', 'customer-1')->update($data);  // update data user

// // coba akses model UserModel
// $user = UserModel::all();   // ambil semua data dari tabel m_user
// return view('user', ['data' => $user]);
