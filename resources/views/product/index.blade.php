@extends('layout.app')

@section('content')
<div class="container p-4">
    <a href="{{route('products.create')}}" class="btn btn-outline-primary mb-5 p-2">Create A New Product</a>
    <table class="table border border-1 text-center shadow p-1">
        <thead class="bg-secondary text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category}}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{route('products.edit',$product)}}" class="btn btn-outline-info mx-1"><i class="far fa-edit"></i></a>
                        <form action="{{route('products.destroy', $product)}}" method="post" class="mx-1">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection