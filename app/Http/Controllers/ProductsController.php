<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Http\Models\Merchant;
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
            'merchant_id' => 'required',
            'price' => 'required',
            'image' => ['required','image'],
            'product_name' => 'required',
        ]);

        $imagePath = request('image')->store('uploads','public');
        \App\Models\Product::create([
            'merchant_id' =>$data['merchant_id'],
            'price' =>$data['price'],
            'image' => $imagePath,
            'product_name'=>$data['product_name']
        ]);

        return redirect('home');
    }
    

}

