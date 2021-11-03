<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        /**
     * Criar um novo Produto depois de validação
     *
     * @param  array  $data
     */

     public function create_view(){
        return view('product.create',[
            'user' => auth()->user(),
        ]);
     }

    protected function store()
    {
        $data = request()->validate([
            'merchant_name' => 'required',
            'price' => 'required',
            'image' =>'required|image'
        ]);
        auth()->user()->merchant()->create($data);
        //dd(request()->all());
    }
    

}

