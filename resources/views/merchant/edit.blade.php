@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Fornecedor') }}</div>

                <div class="card-body">
                    <form method="POST" action="/m/{{$merchant->id}}/update">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="merchant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="merchant_name" type="text" class="form-control @error('merchant_name') is-invalid @enderror" name="merchant_name" value="{{ old('merchant_name') }}" required autocomplete="merchant_name" autofocus>

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
                                    {{ __('Cadastrar') }}
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
