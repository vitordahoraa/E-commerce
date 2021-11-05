<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Merchant;
Use App\Models\Product;
Use App\Models\User;
Use App\Models\ProductStatus;
Use App\Events\EmptyOrder;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Criar um novo Produto depois de validação, com todos os product_status
     * pré-inseridos, com autorização para verificar se o usuário é um adm
     *
     * @param  view
     */

    public function create_view(){
        $product = new Product();
        $this->authorize('create',$product);
        
        return view('product.create',[
            'user' => auth()->user(),
            'product_status' => ProductStatus::all(),
        ]);
     }
     
    /**
     * Armazenagem no banco de dados, as informações do produto
     * 
     * @return redirect
     * 
     */
    protected function store()
    {
        
        
        $data = request()->validate([
            'merchant_id' => 'required',
            'price' => 'required',
            'image' => ['required','image'],
            'product_name' => 'required',
            'product_status'=> 'required',
        ]);

        $imagePath = request('image')->store('uploads','public');
        Product::create([
            'merchant_id' =>$data['merchant_id'],
            'price' =>$data['price'],
            'image' => $imagePath,
            'product_name'=>$data['product_name'],
            'status_id' => $data['product_status'],
        ]);

        return redirect('home');
    }
    
    /**
     * Exibição de alteração do produto
     * 
     * @return redirect
     * 
     */
    protected function edit(Product $product){

        
        $this->authorize('update', $product);

        return view('product.edit',compact('product'));

    }
    
    /**
     * Update no produto
     * 
     * @return redirect
     * 
     */
    protected function update(Product $product){

        $data = request()->validate([
            'price' => 'required',
            'product_name' => 'required',
            'image' => ['required','image'],
        ]);

    $product->update($data);
    return redirect('home');
    }

    
    /**
     * Exibição maior no produto
     * 
     * @return redirect
     * 
     */
    protected function show(Product $product){
        return view('product.show',compact('product'));
    }
    
    
    /**
     * Delete no produto, e garante que caso aquele item estava vinculado a uma ordem, ele altere o status da ordem para encerrado também
     * 
     * @return redirect
     * 
     */
    protected function destroy(Product $product){
        $product->delete();
        return redirect('home');
    }
        
                
}

