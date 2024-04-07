<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
       $product = Product::all();
    //   dd($produt);
        return view('products.index',['product' => $product]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
    // dd($request);
   $data= $request->validate([
       'name' => 'required',
       'qty' => 'required|numeric',
       'price' => 'required',
       'description' => 'required' 
    ]);
    // dd($data);
   $newdata = Product::create($data);
//    dd($newdata);
    return redirect()->route('product.index')->with('success','Product Added Successfully');
    }

    public function edit(product $product){
        //  dd($product);
      
         return view('products.edit',['product'=>$product]);
    }

    public function update(product $product,Request $request){
       $newdata= $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required',
            'description' => 'required' 
         ]);
        //  dd($newdata);
        $product->update($newdata);
        return redirect()->route('product.index')->with('success','Product Updated Successfully');
    }
    public function delete($id){
       $data = Product::find($id);
        $data->delete();
       return redirect()->route('product.index')->with('success','Product Deleted Successfully');
    }
}
