<?php

namespace App\Http\Controllers\Dashboard\DashboardKreator;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public Users $user;

    public function __construct()
    {
        $this->user = new Users();
    }

    public function index()
    {

        $user = auth()->user()->load('creatorProfile');
        $title = 'Dashboard Tip | ChipIn';

        return view('Tip', compact('user', 'title'));
    }
    //
}
