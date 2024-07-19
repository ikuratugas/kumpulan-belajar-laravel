<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
       $all = Product::all();
        return view('product.index', compact('all'));
    }

    public function create(){
        return view('product.create');
    }

    public function edit(Product $id){
        return view('product.edit', compact('id'));
    }

    public function update(Product $produk, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'nullable'
        ]);

        $produk->update($data);
        return redirect('/product');
    }

    public function destroy(Product $id){
        Product::destroy($id->id);
        return redirect('/product');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'nullable'
        ]);
        Product::create($data);
        return redirect('/product');
    }

}
