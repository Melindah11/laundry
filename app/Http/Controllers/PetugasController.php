<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    //mengambil data dari table petugas
    	$petugas = DB::table('petugas')->get();
 
    // mengirim data petugas ke view index
    	return view('petugas',['petugas' => $petugas]);
 
}
