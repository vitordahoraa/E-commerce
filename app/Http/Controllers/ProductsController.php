<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
=======
Use App\Models\Merchant;
Use App\Models\Product;
Use App\Models\User;
Use App\Models\ProductStatus;

>>>>>>> develop
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

<<<<<<< HEAD
     public function create_view(){
=======
    public function create_view(){
        $product = new Product();
        $this->authorize('create',$product);
>>>>>>> develop
        return view('product.create',[
            'user' => auth()->user(),
        ]);
     }

    protected function store()
    {
<<<<<<< HEAD
        $data = request()->validate([
            'merchant_name' => 'required',
        ]);
        auth()->user()->merchant()->create($data);
        //dd(request()->all());
    }
    

=======
        
        
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
            'product_name'=>$data['product_name'],
            'status' => 1,
        ]);

        return redirect('home');
    }
    protected function edit(Product $product){

        
        $this->authorize('update', $product);

        return view('product.edit',compact('product'));

    }
    protected function update(Product $product){

        $data = request()->validate([
            'price' => 'required',
            'product_name' => 'required',
            'image' => ['required','image'],
        ]);

    $product->update($data);
    return redirect('home');
    }
    protected function show(Product $product){

        return view('product.show',compact('product'));
        }
    
    protected function destroy(Product $product){
        $product->delete();
        return redirect('home');
    }
        
                
>>>>>>> develop
}

