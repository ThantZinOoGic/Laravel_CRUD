@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="">
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name</label>
                                <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Price</label>
                                <input type="price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $product->price }}">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Size</label>
                                <input type="size" name="size" class="form-control @error('size') is-invalid @enderror" value="{{ $product->size }}">
                                @error('size')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Quantity</label>
                                <input type="quantity" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ $product->quantity }}">
                                @error('quantity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <a href="{{ route('product.index') }}" class="btn btn-outline-dark">Back</a>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                        </div>
                    </form>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection