<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Transaksi extends Controller
{
    public function index()
    {
        return view('admin.transaksi');
    }
}