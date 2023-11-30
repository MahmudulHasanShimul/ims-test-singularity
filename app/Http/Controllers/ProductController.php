<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add');
    }


    public function storeProduct(Request $request){
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);
    
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
    
        $notification = [
            'message'    => 'Product is added successfully',
            'alert-type' => 'success'
        ]; 
    
        return back()->with($notification);
    } 

    public function manageProduct(){
        return view('admin.product.manage',['products' => Product::all()]);
    }

    public function editProduct($id){

        return view('admin.product.edit', ['product' => Product::find($id)]);
    }

    public function updateProduct(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);
    
        $product =  Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
    
        $notification = [
            'message'    => 'Product is Updated successfully',
            'alert-type' => 'success'
        ]; 
    
        return redirect(route('product.manage'))->with($notification);
    } 

    public function deleteProduct($id){
        $product =  Product::find($id);
        $product->delete();

        $notification = [
            'message'    => 'Product is Delete successfully',
            'alert-type' => 'warning'
        ]; 
    
        return redirect(route('product.manage'))->with($notification);
    }
    
}

