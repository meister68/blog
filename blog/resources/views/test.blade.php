@extends('layouts.app')
@section('content')
<div class="card-body">
                    <form method="POST" action="{{ route('test') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="productName" class="col-md-4 col-form-label text-md-right">Product Name</label>

                            <div class="col-md-4">
                            {{-- <input id="productName" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus> --}}
                            <input  id="productName"  type="text" class="form-control" name="productName" value="{{ old('productName') }}" >
                                {{-- @if ($errors->has('email')) --}}
                                    <span class="invalid-feedback" role="alert">
                                        {{-- <strong>{{ $errors->first('email') }}</strong> --}}
                                    </span>
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                            <div class="col-md-4">
                            <input  id="price"  type="number" class="form-control" name="price" value="{{ old('price') }}" >
                                    <span class="invalid-feedback" role="alert"> </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="productType" class="col-md-4 col-form-label text-md-right">Product Type</label>
                            <div class="col-md-4">
                            <input  id="productType"  type="text" class="form-control" name="productType" value="{{ old('productType') }}" >
                                    <span class="invalid-feedback" role="alert"> </span>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                        </div>
</div>
@endsection 