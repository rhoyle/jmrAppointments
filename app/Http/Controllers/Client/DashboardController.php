<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function address()
    {
        return view('client.home-address');
    }
}
