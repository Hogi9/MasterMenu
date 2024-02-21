<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Menu;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
