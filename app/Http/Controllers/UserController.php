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
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ],
        );
        $user->save();
        return view('user', ['data' => $user]);
    }
}

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
