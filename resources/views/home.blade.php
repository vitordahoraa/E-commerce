@extends('layouts.app')

@section('content')
        <div class="row pt-5">
            @foreach($products as $product)
                <div class="d-flex justify-content-center container mt-5">
                    <a href = ""class="card p-3 bg-white"><i class="fa fa-apple"></i>
                        <div class="about-product text-center mt-2"><img src="storage/{{$product->image}}" width="300">
                            <div>
                                <h4>{{$product->product_name}}</h4>
                                <h6 class="mt-0 text-black-50">{{$product->merchant->merchant_name}}</h6>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-center p-price"><span>R$ {{$product->price}}</span></div>
                                 @if(Auth::check())
                                    @if(Auth::user()->id == $product->merchant->user->id)
                                    <object><a href = "/merchant/{{$product->id}}/edit" class="d-flex justify-content-center p-price"><span>Editar</span></a></object>
                                    <object><a href = "" class="d-flex justify-content-center p-price"><span>Excluir</span></a></object>
                                   
                                    @endif
                                @endif
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
@endsection