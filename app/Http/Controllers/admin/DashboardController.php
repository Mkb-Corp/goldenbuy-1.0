<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /**
     * @return View
     */
    public function index()
    {
        return view('admin.home');
    }
}
