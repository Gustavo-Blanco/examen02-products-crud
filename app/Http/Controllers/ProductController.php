<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products,name',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('message','Product added successfully');
    }

    public function show(Product $product)
    {
        
    }

    
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|unique:products,name,'.$product->id,
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required'
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('message','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('message','Product deleted successfully');
    }
}
