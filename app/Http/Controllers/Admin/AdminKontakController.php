<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class AdminKontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        return view('backpage.admin.kontak.index', compact('kontak'));
    }
}
