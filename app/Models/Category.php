<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uid',
        'details',
        'picture',
        'icon',
    ];

    public function sub_categories():HasMany
    {
        return $this->hasMany(SubCategory::class);
    }

}
