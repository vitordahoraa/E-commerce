<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Merchant;

class MerchantPolicy
{
    use HandlesAuthorization;

    /**
     * usuário precisa ser o mesmo do produto para dar update no produto
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Merchant $merchant)
    {
        return $user->id == $merchant->admin_id;
    }
}
