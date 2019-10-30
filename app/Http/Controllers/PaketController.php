<?php

use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;


class PaketController extends Controller{
public function paket($id)
{
    // mengambil data dari table paket
    $paket = DB::table('paket')->get();
 
    // mengirim data paket ke view paket
    return view('paket',['paket' => $paket]);
}
}