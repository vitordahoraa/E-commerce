@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Compra') }}</div>
                
                @if(Auth::user()->orders()->where('status','Em Andamento')->first())
                @csrf

                        @foreach($order->orderitens as $orderitem)
                <div class="card-body">
                        <a href = "/p/{{$orderitem->product->id}}"class="card p-3 bg-white"><i class="fa fa-apple"></i>
                        <div class="about-product text-center mt-2"><img src="storage/{{$orderitem->product->image}}" width="300">
                            <div>
                                <h4>{{$orderitem->product->product_name}}</h4>
                                <h6 class="mt-0 text-black-50">{{$orderitem->product->merchant->merchant_name}}</h6>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-center p-price"><span>R$: {{$orderitem->product->price}}</span></div>
                            <div class="d-flex justify-content-center p-price"><span>QTD: {{$orderitem->quantity}}</span></div>
                            <div class="d-flex justify-content-center p-price"><span>TOTAL: R$: {{number_format($orderitem->quantity * $orderitem->product->price,2)}}</span></div>
                                
                                <object><a href = "o/{{$orderitem->id}}/edit" class="d-flex justify-content-center p-price"><span>Editar</span></a></object>
                                <object>
                                <form method="POST" enctype="multipart/form-data" action="/o/{{$orderitem->id}}/delete">
                                    @csrf
                                        @method('DELETE')
                                    <button type="submit" class="d-flex justify-content-center p-price" onclick="return confirm('Are you sure?')" ><span>Excluir</span></button>
                                </form>
                                </object>
                            </div>
                        </div>
                        </a>
                        @endforeach
                        </div>
                    
                    <form method="POST" action="{{route('bought',[$order->id])}}">    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Comprar') }}
                                </button>
                            </div>
                    </form>
                </div>
                @else
                                                                        
                <div class="card-header">{{ __('Não há pedidos') }}</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection