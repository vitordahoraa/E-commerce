<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Merchant;
Use App\Models\Product;
Use App\Models\User;

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

     public function create_view(User $user){
        return view('product.create',compact('user'));
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
        Product::create([
            'merchant_id' =>$data['merchant_id'],
            'price' =>$data['price'],
            'image' => $imagePath,
            'product_name'=>$data['product_name']
        ]);

        return redirect('home');
    }
    protected function edit(Product $product){

        return view('product.edit',compact($product));

    }
    protected function update(Product $product){
        $data = request()->validate([
            'price' => 'required',
            'product_name' => 'required',
            'image' => ['required','image'],]);

    $product->update($data);
}
}

