<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;
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

        if (Auth::user()) {
            $wishlist_count = Wishlist::where([
                ['user_id', Auth::user()->id],
                ['wishlisted', 1]
            ])->get();

            $wishlist_count = count($wishlist_count);

        }

        return view('components.header', [
            'categories' => $categories,
            'wishlist_count' => $wishlist_count
        ]);
    }
}
