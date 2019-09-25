<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
}
public function store(Request $request) 
{
DB::table('pelanggan')->insert([
    'pelanggan_id' => $request->id,
    'pelanggan_nama' => $request->nama,
    'pelanggan_alamat' => $request->alamat,
    'pelanggan_no_telepon' => $request->no_telepon,
]);
// alihkan halaman ke halaman pegawai
return redirect('/pelanggan');

