<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller{
public function petugas($id)
{
    //mengambil data dari table petugas
    	$petugas = DB::table('petugas')->get();
 
    // mengirim data petugas ke view paket
    	return view('petugas',['petugas' => $petugas]);
}
}
