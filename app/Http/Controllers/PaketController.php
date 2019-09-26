<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    // mengambil data dari table paket
    $paket = DB::table('paket')->get();
 
    // mengirim data paket ke view index
    return view('PaketController',['paket' => $paket]);
}
