<?php

namespace App\Http\Controllers\Dashboard\DashboardKreator;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class walletController extends Controller
{
    public Users $user;

    public function __construct()
    {
        $this->user = new Users();
    }
    public function index()
    {
        $user = auth()->user();
        $title = 'Dashboard Wallet | ChipIn';

        return view('Wallet', compact('user', 'title'));
    }
    //
}
