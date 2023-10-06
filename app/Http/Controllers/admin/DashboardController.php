<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    /**
     * @return View
     */
    public function index()
    {

        $users = User::all()->count();
        $products = Product::all()->count();
        $orders = Order::all()->count();

        return view('dashboard.index', [
            'users_count' => $users,
            'products_count' => $products,
            'orders_count' => $orders
        ]);
    }
}
