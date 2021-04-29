@extends('layout.app')

@section('content')
    <br>
    <div class="d-flex justify-content-center align-items-center p-4">

        <form action="{{route('products.update', $product)}}" method="POST" style="width: 100%; max-width: 450px;" class="shadow p-4">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{$product->name}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" value="{{$product->stock}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" step="any"  value="{{$product->price}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" value="{{$product->category}}">
            </div>
            <div class="d-inline-flex bd-highlight">
                <button class="btn btn-success mx-1" type="submit">Update</button>
                <a class="btn btn-secondary mx-1" href="{{route('products.index')}}">Cancel</a>
            </div>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{$error}}</li>
                       @endforeach 
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </form>
    </div>
@endsection