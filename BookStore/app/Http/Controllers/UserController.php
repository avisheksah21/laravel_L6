<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all()->count();
        return view('admin.index');
    }

    public function home()
    {
        $product = Product::all();
        return view('home.index', compact('product'));
    }

    public function login_home()
    {
        $product = Product::all();
        return view('home.index', compact('product'));
    }

    public function product_details($id)
    {
        $data = Product::find($id);
        return view('home.product_details', compact('data'));
    }
}
