<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Show the checkout form
     */
    public function index(Request $request)
    {
        $cart = session()->get('cart', []);

        // Redirect back to cart if cart is empty
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        // Calculate totals
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $tax = 0.08; // 8% tax rate
        $taxAmount = $subtotal * $tax;
        $total = $subtotal + $taxAmount;

        return view('checkout', [
            'cart' => $cart,
            'subtotal' => $subtotal,
            'tax' => $taxAmount,
            'total' => $total,
            'itemCount' => count($cart),
            'user' => auth()->user()
        ]);
    }

    /**
     * Process the checkout
     */
    public function process(Request $request)
    {
        $validated = $request->validate([
            'shipping_name' => 'required|string|max:255',
            'shipping_email' => 'required|email|max:255',
            'shipping_phone' => 'required|string|max:20',
            'shipping_address' => 'required|string|max:500',
            'shipping_city' => 'required|string|max:100',
            'shipping_state' => 'required|string|max:100',
            'shipping_zip' => 'required|string|max:20',
            'shipping_country' => 'required|string|max:100',
            'payment_method' => 'required|in:credit_card,paypal,cash_on_delivery',
            'notes' => 'nullable|string|max:1000',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        // Calculate totals
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $taxAmount = $subtotal * 0.08;
        $total = $subtotal + $taxAmount;

        // Here you would typically:
        // 1. Create an order in the database
        // 2. Process payment
        // 3. Send confirmation email
        // 4. Clear the cart

        // For now, we'll just simulate success
        $orderNumber = 'ORD-' . strtoupper(uniqid());

        // Store order details in session for confirmation page
        session()->put('last_order', [
            'order_number' => $orderNumber,
            'items' => $cart,
            'shipping' => $validated,
            'subtotal' => $subtotal,
            'tax' => $taxAmount,
            'total' => $total,
            'date' => now()
        ]);

        // Clear the cart
        session()->forget('cart');

        return redirect()->route('checkout.success')->with('success', 'Order placed successfully!');
    }

    /**
     * Show order success page
     */
    public function success(Request $request)
    {
        $order = session()->get('last_order');

        if (!$order) {
            return redirect()->route('shop')->with('error', 'No order found!');
        }

        return view('checkout-success', ['order' => $order]);
    }
}
