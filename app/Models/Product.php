<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'in_stock',
        'sub_category_id',
        'main_picture',
        'pictures',
        'tags',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($product) {
            $product->slug = $product->createSlug($product->name);
            $product->save();
        });
    }

    private function createSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');

            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }

            return "{$slug}-2";
        }

        return $slug;
    }

    public function isWishlisted()  {
        $user = Auth::user();

        if ($user != null) {
            $product = Wishlist::where([
                ['product_id', $this->id],
                ['user_id', $user->id],
                ['wishlisted', 1]])->first();

            if ($product != null) {
                return true;
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }

        return true;
    }
}
