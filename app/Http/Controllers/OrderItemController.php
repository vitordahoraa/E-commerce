<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\OrderItem;
use App\Events\EmptyOrder;
class OrderItemController extends Controller
{
     
    /**
     * Exibição de criação do orderItem
     * 
     * @return view
     * 
     */

    public function create_view(User $user, Product $product){
        
        return view('order.orderitem.create',compact('user','product'));
    }
    
    /**
     * Exibição de a alteração do order item
     * 
     * @return view
     * 
     */
    public function edit_view(OrderItem $orderitem){
        return view('order.orderitem.edit',compact('orderitem'));
    }

    
    /**
     * update no orderItem, somente com a quantidade
     * 
     * @return redirect
     * 
     */
    public function update(OrderItem $orderitem){
        $data = request()->validate([
            'quantity' => 'required',
        ]);
        $orderitem->update($data);
        return redirect(route('order_show'));
    }
    
    /**
     * Delete no orderitem, e caso a ordem só tivesse aquele item vinculado,
     * ele altera o status da ordem para encerrado
     * 
     * @return redirect
     * 
     */
    public function destroy(OrderItem $orderitem){

        event(new EmptyOrder($orderitem));

        $orderitem->delete();
        
        return redirect(route('order_show'));
    }
}
