<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        // dd($cart);
        return view('frontEnd.pages.cart.cart', compact('cart'));
    }
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = session()->get('cart', []);
        $product = Product::find($request->product_id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $request->quantity;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => $request->quantity
            ];
        }
        session()->put('cart', $cart);

        return response()->json(['success' => 'Product added to cart', 'cart' => $cart], 200);
    }

    public function removeFromCart($productId)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }
        return response()->json(['success' => 'Product removed from cart', 'cart' => $cart], 200);
    }
}
