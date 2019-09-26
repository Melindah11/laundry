<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PaketController extends Controller
public function edit($id)
{
    // mengambil data dari table paket
    $paket = DB::table('paket')->where('id',$id)->get();
 
    // mengirim data paket ke view index
    return view(('edit',['paket' => $paket]);
}