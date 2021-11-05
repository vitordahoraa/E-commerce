<!-- BOOTSTRAP PEGO DO SITE: https://bbbootstrap.com/snippets/bootstrap-product-invoice-card-14183634 -->
@extends('layouts.app')

@section('content')
    @foreach($products as $product)
        <div class="row pt-5">
                <div class="d-flex justify-content-center container mt-5">  
                    <a href = "/p/{{$product->id}}"class="card p-3 bg-white"><i class="fa fa-apple"></i>
                    
                        <h3 class="d-flex justify-content-center">{{$product->status->name}}</h3>
                        <div class="about-product text-center mt-2"><img src="storage/{{$product->image}}" width="300">
                            <div>
                                <h4>{{$product->product_name}}</h4>
                                <h6 class="mt-0 text-black-50">{{$product->merchant->merchant_name}}</h6>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-center p-price"><span>R$ {{$product->price}}</span></div>
                            <object><a href = "/o/{{$product->merchant->admin_id}}/{{$product->id}}/create" class="d-flex justify-content-center p-price"><span>Comprar</span></a></object>
                                @can('update',$product)                                
                                <object><a href = "p/{{$product->id}}/edit" class="d-flex justify-content-center p-price"><span>Editar</span></a></object>
                                <object>
                                    <form method="POST" enctype="multipart/form-data" action="/p/{{$product->id}}/delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="d-flex justify-content-center p-price" onclick="return confirm('Are you sure?')" ><span>Excluir</span></button>
                                    </form>
                                </object>
                                @endcan
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        
        @endforeach
@endsection