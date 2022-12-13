<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserPayment;
use App\Models\UserPaymentHistory;
use Illuminate\Http\Request;

class AdminPembayaranController extends Controller
{
    public function index()
    {
        $payments = UserPayment::all();
        return view('backpage.admin.pembayaran.index', compact('payments'));
    }
}
