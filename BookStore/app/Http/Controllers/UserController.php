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
        $category_count = Category::all()->count();
        return view('admin.index', compact('user', 'product_count','category_count'));
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

    public function generateHmacBase64($key, $message)
{
    // Generate the HMAC-SHA256 hash
    $hmacHash = hash_hmac('sha256', $message, $key, true);

    // Encode the hash in Base64
    return base64_encode($hmacHash);
}

    public function esewa_form()
    {
        // Fetch the product price (mocked as fetching the first product)
    $product = Product::first();
    $totalAmount = $product->price ?? 0; // Handle cases where no product exists
    $taxAmount = $totalAmount - 10;

    // Generate random transaction UUID
    $transactionUuid = sprintf('%02d-%03d-%02d', random_int(10, 99), random_int(100, 999), random_int(10, 99));

    // Secret key for HMAC
    $secretKey = '8gBm/:&EnhH.1/q';

    // Generate the message for HMAC
    $message = "total_amount={$totalAmount},transaction_uuid={$transactionUuid},product_code=EPAYTEST";

    // Generate the signature
    $signature = base64_encode(hash_hmac('sha256', $message, $secretKey, true));

    // Pass data to the view
    return view('home.esewa_form', compact('totalAmount', 'taxAmount', 'transactionUuid', 'signature'));

    }
}
