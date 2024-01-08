@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <form action="{{ route('product.update', $product->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="">
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name</label>
                                <input type="name" name="name" class="form-control" value="{{ $product->name }}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Price</label>
                                <input type="price" name="price" class="form-control" value="{{ $product->price }}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Size</label>
                                <input type="size" name="size" class="form-control" value="{{ $product->size }}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Quantity</label>
                                <input type="quantity" name="quantity" class="form-control" value="{{ $product->quantity }}">
                            </div>
                            <div class="mb-4 text-center">
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