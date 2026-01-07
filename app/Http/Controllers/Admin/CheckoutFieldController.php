<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CheckoutField;
use Illuminate\Http\Request;

class CheckoutFieldController extends Controller
{
    public function index()
    {
        $fields = CheckoutField::orderBy('sort_order')->get();
        return view('admin.shop.checkout-fields.index', compact('fields'));
    }

    public function edit(CheckoutField $checkoutField)
    {
        return view('admin.shop.checkout-fields.edit', compact('checkoutField'));
    }

    public function update(Request $request, CheckoutField $checkoutField)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'placeholder' => 'nullable|string|max:255',
            'is_required' => 'boolean',
            'is_visible' => 'boolean',
            'sort_order' => 'required|integer',
        ]);

        // checkbox handling for boolean values when not checked
        $validated['is_required'] = $request->has('is_required');
        $validated['is_visible'] = $request->has('is_visible');

        $checkoutField->update($validated);

        return redirect()->route('admin.checkout-fields.index')->with('success', 'Checkout field updated successfully!');
    }
}
