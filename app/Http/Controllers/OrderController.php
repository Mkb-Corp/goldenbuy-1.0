<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
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
