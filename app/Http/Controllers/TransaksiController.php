<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller{
public function transaksi($id)
{
    //
    $transaksi = DB::table('transaksi')->get();
 //
 return view('TransaksiController',['transaksi' => $transaksi]);
}
}