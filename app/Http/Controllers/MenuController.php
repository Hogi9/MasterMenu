<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu.index');
    }

    public function testing()
    {
        return view('menu.testing');
    }

    public function testing2()
    {
        return view('menu.testing2');
    }

    public function testing3()
    {
        return view('menu.testing3');
    }
}
