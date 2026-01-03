<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceProduct;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceProductController extends Controller
{
    public function index()
    {
        $products = ServiceProduct::with('category')->latest()->paginate(15);
        return view('admin.services.products.index', compact('products'));
    }

    public function create()
    {
        $categories = ServiceCategory::where('is_active', true)->get();
        return view('admin.services.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|url',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');

        ServiceProduct::create($validated);

        return redirect()->route('admin.service-products.index')
            ->with('success', 'Service product created successfully!');
    }

    public function edit(ServiceProduct $serviceProduct)
    {
        $categories = ServiceCategory::where('is_active', true)->get();
        return view('admin.services.products.edit', compact('serviceProduct', 'categories'));
    }

    public function update(Request $request, ServiceProduct $serviceProduct)
    {
        $validated = $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|url',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');

        $serviceProduct->update($validated);

        return redirect()->route('admin.service-products.index')
            ->with('success', 'Service product updated successfully!');
    }

    public function destroy(ServiceProduct $serviceProduct)
    {
        $serviceProduct->delete();

        return redirect()->route('admin.service-products.index')
            ->with('success', 'Service product deleted successfully!');
    }
}
