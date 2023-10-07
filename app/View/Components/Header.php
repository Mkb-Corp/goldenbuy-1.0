<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::all();
        $wishlist_count = 0;
        $basket_amount = 0;
        $orders_items = array();

        if (Auth::user()) {
            $wishlist_count = Wishlist::where([
                ['user_id', Auth::user()->id],
                ['wishlisted', 1]
            ])->get();

            $order = Order::where([
                ['user_id', Auth::user()->id],
                ['status', 'INITIATED']
            ])->first();

            if ($order) {
                $orders_items = OrderItem::where('order_id', $order->id)->get();

                foreach ($orders_items as $item) {
                    $basket_amount += $item->product->price * $item->qty;
                }
            }


            $wishlist_count = count($wishlist_count);
        }

        return view('components.header', [
            'categories' => $categories,
            'wishlist_count' => $wishlist_count,
            'order_items' => $orders_items,
            'basket_count' => count($orders_items),
            'basket_amount' => $basket_amount
        ]);
    }
}
