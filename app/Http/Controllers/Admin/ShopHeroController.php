<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShopHeroSection;
use Illuminate\Http\Request;

class ShopHeroController extends Controller
{
    public function edit()
    {
        $hero = ShopHeroSection::first();
        return view('admin.shop.hero.edit', compact('hero'));
    }

    public function update(Request $request)
    {
        $hero = ShopHeroSection::first();
        
        $validated = $request->validate([
            'subtitle' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'badges' => 'required|array',
            'badges.*' => 'required|string|max:255',
            'stat1_label' => 'required|string|max:255',
            'stat1_value' => 'required|string|max:255',
            'stat1_sublabel' => 'required|string|max:255',
            'stat2_label' => 'required|string|max:255',
            'stat2_value' => 'required|string|max:255',
            'stat2_sublabel' => 'required|string|max:255',
            'stat3_label' => 'required|string|max:255',
            'stat3_value' => 'required|string|max:255',
            'stat3_sublabel' => 'required|string|max:255',
            'stat4_label' => 'required|string|max:255',
            'stat4_value' => 'required|string|max:255',
            'stat4_sublabel' => 'required|string|max:255',
        ]);

        $hero->update($validated);

        return back()->with('success', 'Shop Hero Section updated successfully!');
    }
}
