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

    public function store(User $user, Product $product)
    {
        $order = Order::where('user_id', $user->id)
                      ->where('status','Em andamento')->first() ?? Order::create([
            'user_id' => $user->id,
            'status' => 'Em andamento',
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


    public function show(){
        $order = auth()->user()->orders()->where('status','Em andamento')->first();
        return view('order.view',[
            'order' => $order
        ]);
    }

}
