<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function home()
    {
        // dd('llegó');
        return view('backend.admin.dashboard');
    }
}
