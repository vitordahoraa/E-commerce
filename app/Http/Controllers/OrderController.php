<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Caso o usuário não tenha uma Order com status 'Em andamento', ele cria uma. 
     * Se há, ele vincula o OrderItem nessa Order
     * 
     */
    public function store(User $user, Product $product)
    {
        $order = Order::where('user_id', $user->id)
                      ->where('status','Em Andamento')->first() ?? Order::create([
            'user_id' => $user->id,
            'status' => 'Em Andamento',
        ]);
        $data = request()->validate([
            'quantity' => 'required',
        ]);
        
        $orderItem = OrderItem::create([
            'order_id' => $order->id,
            'product_id'=> $product['id'],
            'quantity' => $data['quantity'],
        ]);

        return redirect('home');
    }

    
    /**
     * Exibição de a order
     * 
     * @return view
     * 
     */
    public function show(){
        $order = auth()->user()->orders()->where('status','Em Andamento')->first();
        return view('order.view',[
            'order' => $order
        ]);
    }

}
