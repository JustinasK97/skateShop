<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\Category;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showOrders()
    {
        $products = Product::all();
        $orders = Order::all();
        return view ('shop.pages.orders', compact('products', 'orders'));
    }


    public function changeStatus(Order $order){

        return view ('shop.pages.change_status', compact('order'));

    }


    public function change_status(Request $request, Order $order){

        $validateData = $request->validate([
            'orderStatus' => 'required',

        ]);

        Order::where('id', $order->id)->update
        (['orderStatus' => request('orderStatus'),


        ]);

        return redirect('/orders');
    }

    public function deleteOrder(Order $order)
    {

        $order->delete();
        return redirect('orders');

    }

    public function warningOrder(Order $order)
    {

        return view('shop.pages.warning_order',compact('order'));
    }

}
