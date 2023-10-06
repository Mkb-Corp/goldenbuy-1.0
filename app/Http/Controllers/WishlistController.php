<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //

    function add_to_wishlist($productSlug) {

        $product = Product::where('slug', $productSlug)->first();
        $user = Auth::user();

        $wishlist = Wishlist::where([
            ['product_id', $product->id],
            ['user_id', $user->id]])->first();

        if ($wishlist == null) {
            Wishlist::create([
                'product_id' => $product->id,
                'user_id' => $user->id,
                'wishlisted' => true
            ]);
        } else {
            $wishlist->wishlisted = !($wishlist->wishlisted);
            $wishlist->save();
        }

        return redirect()->back();
    }
}
