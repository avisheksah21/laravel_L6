<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('usertype', 'user')->get()->count();
        $product_count = Product::all()->count();
        return view('admin.index', compact('user', 'product_count'));
    }

    public function home()
    {
        $product = Product::paginate(10);
        $categories = Category::all();
        return view('home.index', compact('product','categories'));
    }

    public function login_home()
    {
        $product = Product::paginate(10);
        $categories = Category::all();
        return view('home.index', compact('product','categories'));
    }

    public function product_details($id)
    {
        $data = Product::find($id);
        $categories = Category::all();
        return view('home.product_details', compact('data','categories'));
    }

    public function product_search(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');

        $query = Product::query();

        // Filter by title
        if ($search) {
            $query->where('title', 'LIKE', '%' . $search . '%');
        }

        // Filter by category
        if ($category) {
            $query->where('category_id', $category);
        }

        $product = $query->paginate(10);
        $categories = Category::all(); // Fetch all categories for the dropdown

        return view('home.index', compact('product', 'categories'));
    }
}
