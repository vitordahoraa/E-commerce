<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;


    /**
     * usuário precisa ser admin para criar produtos
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user, Product $product)
    {
        return $user->isAdmin;
    }

    /**
     * usuário precisa ser o mesmo do produto para dar update no produto
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Product $product)
    {
        return $user->id == $product->merchant->admin_id;
    }
}
