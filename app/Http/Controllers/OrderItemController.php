<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
class OrderItemController extends Controller
{

    public function create_view(User $user, Product $product){
        return view('order.orderitem.create',compact('user','product'));
    }
}
