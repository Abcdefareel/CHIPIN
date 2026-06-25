<?php

namespace App\Http\Controllers\Dashboard\DashboardKreator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index()
    {
        return view('Tip');
    }
    //
}
