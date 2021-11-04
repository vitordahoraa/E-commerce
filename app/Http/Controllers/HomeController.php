<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Merchant;
=======
use App\Models\Product;
>>>>>>> develop

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
<<<<<<< HEAD
            'merchants' => Merchant::all(),
=======
            'products' => Product::all(),
>>>>>>> develop
        ]);
    }
}
