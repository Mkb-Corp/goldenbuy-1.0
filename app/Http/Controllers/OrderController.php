<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class OrderController extends Controller
{
    //
    function cart() : View {

        $cart_items = array();
        $basket_amount = 0;
        $order = Order::where([
            ['user_id', Auth::user()->id],
            ['status', 'INITIATED']
        ])->first();

        if ($order) {
            $cart_items = OrderItem::where('order_id', $order->id)->get();

            foreach ($cart_items as $item) {
                $basket_amount += $item->product->price * $item->qty;
            }
        }
        return view('orders.cart', [
            'basket_amount' => $basket_amount,
            'cart_items' => $cart_items
        ]);
    }

    function product_to_order(Request $request)
    {

        $order = Order::where([
            ['user_id', Auth::user()->id],
            ['status', 'INITIATED']
        ])->first();
        $product = Product::where('slug', $request->post('product_slug'))->first();

        if ($order) {

            $itemToBasket = OrderItem::where([
                ['order_id', $order->id],
                ['product_id', $product->id]
            ])->get();


            if ($itemToBasket == null) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'qty' => $request->post('qty')
                ]);
            }
        } else {
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'status' => 'INITIATED'
            ]);
            $itemToBasket = OrderItem::where([
                ['order_id', $order->id],
                ['product_id', $product->id]
            ])->get();


            if ($itemToBasket == null) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'qty' => $request->post('qty')
                ]);
            }
        }

        return redirect()->back()->with('success', 'Produit ajouté');
    }
}
