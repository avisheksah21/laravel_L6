<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('usertype','user')->get()->count();
        $product_count = Product::all()->count();
        return view('admin.index', compact('user','product_count'));
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
