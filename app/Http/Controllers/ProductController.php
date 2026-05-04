<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
    public function create()
{
    return view('add');
}
public function addToCart($id)
{
    $product = Product::find($id);

    $cart = session()->get('cart', []);

    $cart[] = [
        'name' => $product->name,
        'price' => $product->price
    ];

    session()->put('cart', $cart);

    return redirect('/');
}
public function cart()
{
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
}
  

public function checkout()
{
    $cart = session()->get('cart', []);
    return view('checkout', compact('cart'));
}
public function delete($id)
{
    Product::find($id)->delete();
    return redirect('/');
}

public function placeOrder()
{
    session()->forget('cart');
    return redirect('/')->with('success', 'Order placed successfully!');
}
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/');
    }
}
