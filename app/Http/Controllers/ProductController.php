<?php

namespace App\Http\Controllers;

use App\Models\Product;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
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
            'category' => 'required',
            // 'files' => 'required'
        ]);
        // dd(Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath());
        $files = [];
        foreach ($request->file('files') as $file) {
            array_push($files,['url' => Cloudinary::upload($file->getRealPath())->getSecurePath()]);
        }
        $product = Product::create($request->except(['files']));

        $product->images()->createMany($files);

        return redirect()->route('products.index')->with('message','Product added successfully');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
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
            'category' => 'required',
            // 'files' => 'required'
        ]);
        $files = [];
        // dd($request->all());
        // dd($request->all()['files']);
        foreach ($request->all()['files'] as $key => $container) {
            // dd($container);
            if (array_key_exists('hidden', $container)) {
                if (isset($container['file'])) {
                    array_push($files,['url' => Cloudinary::upload($container['file']->getRealPath())->getSecurePath()]);
                }else{
                    array_push($files,['url' => $container['hidden']]);
                }
            }
            // dd(isset($container));
            if (isset($container['file'])) {
                array_push($files,['url' => Cloudinary::upload($container['file']->getRealPath())->getSecurePath()]);
            }
        }
        $product->images()->delete();
        $product->update($request->all());
        $product->images()->createMany($files);
        return redirect()->route('products.index')->with('message','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('message','Product deleted successfully');
    }
}
