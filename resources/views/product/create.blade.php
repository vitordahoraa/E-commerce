@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Fornecedor') }}</div>

                <div class="card-body">
                    <form method="POST" action="/p/store">
                        @csrf
                         <div class="form-group row">
                            <label for="merchant_id" class="col-md-4 col-form-label text-md-right">{{ __('Nome do fornecedor') }}</label>

                            <select class="col-md-6">
                            <option value="" hidden>-</option>
                                @foreach ($user->merchant as $merchan)
                                <option value="{{ $merchan->id }}" class="form-control @error('merchant_id') is-invalid @enderror" name= "merchant_id" {{ $merchan->id == old('merchan_id') ? 'selected' : '' }}>{{ $merchan->merchant_name }}</option>
                                @endforeach
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </select>
                        </div>

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


                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço do produto') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Imagem do produto" class="col-md-4 col-form-label text-md-right">{{ __('Imagem') }}</label>

                            <div class="col-md-6">
                                <input id="Imagem do produto" type="file" class="form-control @error('Imagem do produto') is-invalid @enderror" name="Imagem do produto" value="{{ old('Imagem do produto') }}" required  autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
