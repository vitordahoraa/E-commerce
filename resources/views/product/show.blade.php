@extends('layouts.app')

@section('content')

<div class="row pt-5">
    <div class="d-flex justify-content-center container mt-5">
        <a href = "/p/{{$product->id}}"class="card p-3 bg-white"><i class="fa fa-apple"></i>
            <div class="about-product text-center mt-2"><img src="../storage/{{$product->image}}" width="450">
                <div>
                    <h4>{{$product->product_name}}</h4>
                    <h6 class="mt-0 text-black-50">{{$product->merchant->merchant_name}}</h6>
                </div>
            </div>
            <div class="stats mt-2">
                <div class="d-flex justify-content-center p-price"><span>R$ {{$product->price}}</span></div>
                    <object><a href = "" class="d-flex justify-content-center p-price"><span>Comprar</span></a></object>
                    @can('update',$product)
                        <object><a href = "/p/{{$product->id}}/edit" class="d-flex justify-content-center p-price"><span>Editar</span></a></object>
                        <object><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="/p/{{$product->id}}/delete"><span>Excluir</span></a></object>
                    @endcan
                </div>
            </div>
        </a>
    </div>
</div>
@endsection