<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
            'merchants' => Merchant::all(),
        ]);
    }
}
