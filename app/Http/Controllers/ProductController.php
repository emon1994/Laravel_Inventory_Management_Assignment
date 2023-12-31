<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\User;

use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProductController extends Controller
{
    public function add_product(){
        return view('add-product');
    }

    public function store_product(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Product::insert($data);
        return redirect('/product')->with('success', 'Product added successfully');
    }

    public function show_product(){
        $data=Product::all();
        return view('product',compact('data'));
    }

    public function edit_product($id){
        $data=Product::find($id);
        return view('edit-product', compact('data'));
    }

    public function update_product(Request $request,$id){
    

            $data = $request->validate([
                'name' => 'required|string',
                'quantity' => 'required|integer',
                'price' => 'required|numeric',
            ]);

            $product=Product::find($id);
            $product->name=$data['name'];
            $product->quantity=$data['quantity'];
            $product->price=$data['price'];

            $product->save();




        return redirect('/product')->with('success', 'Product updated successfully');
    }

    public function delete_product($id){
        $data= Product::find($id);
        $data->delete();

        return redirect('/product')->with('success', 'Product deleted successfully');
    }
}
