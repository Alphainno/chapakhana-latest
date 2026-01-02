<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display the shopping cart
     */
    public function index(Request $request)
    {
        $cart = session()->get('cart', []);
        
        // Calculate totals
        $subtotal = 0;
        $tax = 0.08; // 8% tax rate
        
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        
        $taxAmount = $subtotal * $tax;
        $total = $subtotal + $taxAmount;
        
        return view('cart', [
            'cart' => $cart,
            'subtotal' => $subtotal,
            'tax' => $taxAmount,
            'total' => $total,
            'itemCount' => count($cart)
        ]);
    }

    /**
     * Add item to cart
     */
    public function add(Request $request)
    {
        $product = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'format' => 'required|string',
            'price' => 'required|numeric',
            'rating' => 'required|numeric',
            'image' => 'required|string',
            'desc' => 'required|string',
            'stock' => 'required|in:0,1',
            'quantity' => 'nullable|integer|min:1',
        ]);

        // Convert stock to boolean
        $product['stock'] = (bool)$product['stock'];
        $quantity = $product['quantity'] ?? 1;
        
        $cart = session()->get('cart', []);
        
        // Create a unique key for the product
        $productKey = md5($product['title'] . $product['format']);
        
        if (isset($cart[$productKey])) {
            // Product already in cart, increase quantity
            $cart[$productKey]['quantity'] += $quantity;
        } else {
            // Add new product to cart
            $product['quantity'] = $quantity;
            $cart[$productKey] = $product;
        }
        
        session()->put('cart', $cart);
        
        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    /**
     * Remove item from cart
     */
    public function remove(Request $request)
    {
        $productKey = $request->input('product_key');
        
        $cart = session()->get('cart', []);
        unset($cart[$productKey]);
        
        session()->put('cart', $cart);
        
        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }

    /**
     * Update item quantity
     */
    public function update(Request $request)
    {
        $productKey = $request->input('product_key');
        $quantity = $request->input('quantity', 1);
        
        $cart = session()->get('cart', []);
        
        if (isset($cart[$productKey])) {
            if ($quantity <= 0) {
                unset($cart[$productKey]);
            } else {
                $cart[$productKey]['quantity'] = $quantity;
            }
        }
        
        session()->put('cart', $cart);
        
        return redirect()->route('cart.index')->with('success', 'Cart updated!');
    }

    /**
     * Clear entire cart
     */
    public function clear(Request $request)
    {
        session()->forget('cart');
        
        return redirect()->route('cart.index')->with('success', 'Cart cleared!');
    }

    /**
     * Get cart count for header
     */
    public function getCount(Request $request)
    {
        $cart = session()->get('cart', []);
        return count($cart);
    }
}
