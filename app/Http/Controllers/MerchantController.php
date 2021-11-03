<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;

class MerchantController extends Controller
{

            /**
     * Garante que o usuário esteja logado
     *
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_view(){
        return view('merchant.create');
    }

        /**
     * Criar um novo fornecedor depois de validação
     *
     * @param  array  $data
     */
    protected function store()
    {
        $data = request()->validate([
            'merchant_name' => 'required',
        ]);
        auth()->user()->merchant()->create($data);

        return redirect('home');
        //dd(request()->all());
    }
    

}
