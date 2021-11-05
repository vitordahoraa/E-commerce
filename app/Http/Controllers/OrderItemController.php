<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\OrderItem;
class OrderItemController extends Controller
{

    public function create_view(User $user, Product $product){
        return view('order.orderitem.create',compact('user','product'));
    }

    public function edit_view(OrderItem $orderitem){
        return view('order.orderitem.edit',compact('orderitem'));
    }

    public function update(OrderItem $orderitem){
        $data = request()->validate([
            'quantity' => 'required',
        ]);
        $orderitem->update($data);
        return redirect(route('order_show'));
    }
    
    public function destroy(OrderItem $orderitem){
        $orderitem->delete();
        return redirect(route('order_show'));
    }
}
