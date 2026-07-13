<?php

namespace App\Http\Controllers\Dashboard\DashboardKreator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('Qrcode', compact('user'));
    }

    //
}
