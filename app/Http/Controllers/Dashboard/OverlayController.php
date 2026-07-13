<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CreatorProfile;
use Illuminate\Http\Request;

class OverlayController extends Controller
{
    public function show($username)
    {
        $creator = CreatorProfile::where('username', $username)->firstOrFail();

        return view('Overlay', compact('creator'));
    }
}
