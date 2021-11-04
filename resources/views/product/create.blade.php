@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">{{ __('Cadastro de Fornecedor') }}</div>

                <div class="card-body">
                    <form method="POST" action="/p/store">
                        @csrf
<!--                         <div class="form-group row">
                            <label for="merchant_id" class="col-md-4 col-form-label text-md-right">{{ __('Nome do fornecedor') }}</lavel>
                                
                                <div class="col-md-6">
                                <select name="merchant_id" id="merchant_id"class="form-control @error('merchant_id') is-invalid @enderror" name="merchant_id" value="{{ old('merchant_id') }}" required autocomplete="merchant_id" autofocus>
                                    <option value="">-</option>
                                    @foreach ($user->merchant as $merchan)
                                        <option value="{{ $merchan->id }}"  {{ $merchan->id == old('merchan_id') ? 'selected' : '' }}>{{ $merchan->merchant_name }}</option>
                                    @endforeach
                                </select>
                                @error('merchant_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 -->
                         <div class="form-group row">
                            <label for="merchant_id" class="col-md-4 col-form-label text-md-right">{{ __('Nome do fornecedor') }}</label>

                            <select class="col-md-6">
                            <option value="" hidden>-</option>
                                @foreach ($user->merchant as $merchan)
                                <option value="{{ $merchan->id }}" class="form-control @error('merchant_id') is-invalid @enderror" name= "merchant_id" {{ $merchan->id == old('merchan_id') ? 'selected' : '' }}>{{ $merchan->merchant_name }}</option>
                                @endforeach
                                @error('name')
=======
                <div class="card-header">{{ __('Cadastro de Produto') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/p/store">
                        @csrf

                        <div class="form-group row">
                            <label for="merchant_id" class="col-md-4 col-form-label text-md-right">{{ __('Nome do fornecedor') }}</label>

                            <select name = 'merchant_id' class="col-md-6">
                            <option value="" hidden>-</option>
                                @foreach ($user->merchant as $merchant)
                                <option value="{{ $merchant->id }}" class="form-control @error('merchant_id') is-invalid @enderror" > {{ $merchant->merchant_name }}</option>
                                @endforeach
                                @error('merchant_id')
>>>>>>> develop
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </select>
                        </div>

<<<<<<< HEAD
                        <div class="form-group row">
                            <label for="merchant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome do produto') }}</label>

                            <div class="col-md-6">
                                <input id="merchant_name" type="text" class="form-control @error('merchant_name') is-invalid @enderror" name="merchant_name" value="{{ old('merchant_name') }}" required autocomplete="merchant_name" autofocus>
=======

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
>>>>>>> develop

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
<<<<<<< HEAD
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Nome do produto') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
=======
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagem do produto') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
>>>>>>> develop

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD

                        <div class="form-group row">
                            <label for="merchant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome do produto') }}</label>

                            <div class="col-md-6">
                                <input id="merchant_name" type="text" class="form-control @error('merchant_name') is-invalid @enderror" name="merchant_name" value="{{ old('merchant_name') }}" required autocomplete="merchant_name" autofocus>

                                @error('name')
=======
                        
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Produto') }}</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name" autofocus>
 
                                @error('product_name')
>>>>>>> develop
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< HEAD

                        <div class="form-group row">
                            <label for="merchant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome do produto') }}</label>

                            <div class="col-md-6">
                                <input id="merchant_name" type="text" class="form-control @error('merchant_name') is-invalid @enderror" name="merchant_name" value="{{ old('merchant_name') }}" required autocomplete="merchant_name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


=======
>>>>>>> develop
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
