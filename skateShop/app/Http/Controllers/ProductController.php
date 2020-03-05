
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{

    public function addProduct()
    {
        $categories = Category::all();
        return view('shop.pages.add_product', compact('categories'));
    }

    public function storeProduct(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'

        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/', "", $path);


        $product = Product::create([
            'title' => request('title'), //name
            'description' => request('description'),
            'price' => request('price'),
            'quantity' => request('quantity'),
            'catid' => request('catid'),
            'img' => $filename,


        ]);

        return redirect('/control_product');
    }

    public function controlProduct()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('shop.pages.control_product', compact('products', 'categories'));
    }

    public function warningProduct(Product $product)
    {

        return view('shop.pages.warning_product',compact('product'));
    }

    public function deleteProduct(Product $product)
    {

        $product->delete();
        return redirect('control_product');

    }

    public function editProduct(Product $product){
        $categories = Category::all();

        return view ('shop.pages.edit_product', compact('product','categories'));

    }

    public function edit_Product(Request $request, Product $product){

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        Product::where('id', $product->id)->update
        (['title' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'quantity' => request('quantity'),
            'catid' => request('catid'),
            'img' => request('img'),

        ]);
        if ($request->hasFile('img'))
        {
            File::delete('storage/'.$product->img);
            $path=$request->file('img')->store('/public/');
            $filename=str_replace('public/',"",$path);
            Product::where('id',$product->id)->update([
                'img'=>$filename
            ]);
        }

        return redirect('/control_product');
    }



}
