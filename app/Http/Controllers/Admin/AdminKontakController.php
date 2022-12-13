<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminKontakController extends Controller
{
    public function index()
    {
        return view('backpage.admin.kontak.index');
    }
}
