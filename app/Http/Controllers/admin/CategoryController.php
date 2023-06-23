<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.categories', [
            'categories' => $categories
        ]);
    }

    public function add(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'unique:categories,name']
        ]);

        Category::create($request->post());

        return redirect()->route('categories.index');
    }
}
