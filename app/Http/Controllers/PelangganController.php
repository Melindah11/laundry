<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller{
    public function pelanggan($id)
{
    // mengambil data dari table pelanggan
    	$pelanggan = DB::table('pelanggan')->get();
 
    	// mengirim data pelanggan ke view pelanggan
        return view('pelanggan',['pelanggan' => $pelanggan]);
         
        
 
}}
