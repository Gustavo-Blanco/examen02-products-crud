@extends('layout.app')

@section('content')
<div class="row align-items-center justify-content-evenly">
        <div class="col-md-4">
            <div class="card mt-4 shadow p-2">
                <div class="text-center mt-3">
                    <h2>Show Product</h2>
                </div>
                <div class="car-body">
                <br>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control" value="{{$product->stock}}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" step="any" value="{{$product->price}}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" value="{{$product->category}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="">Images</label>
                    @foreach ($product->images as $image)
                        <div class="my-3">
                            <img src="{{$image->url}}" alt="" width="400">
                        </div>
                        <hr>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-outline-secondary mx-1 d-block" href="{{route('products.index')}}">Cancel</a>
                </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-4 ml-4 text-center">
            <h4>Remenber!</h4>
            <h1>GO | APPLICATION</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto impedit cum aperiam, officiis nulla perspiciatis consectetur repellat nam tempore consequuntur.</p>
            <a href="/product" class="btn btn-outline-info">Back to List</a>
        </div>
</div>
    
@endsection
