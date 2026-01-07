<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;

class FormatController extends Controller
{
    public function index()
    {
        $formats = Format::latest()->get();
        return view('admin.formats.index', compact('formats'));
    }

    public function create()
    {
        return view('admin.formats.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');

        Format::create($validated);

        return redirect()->route('admin.formats.index')
            ->with('success', 'Format created successfully!');
    }

    public function edit(Format $format)
    {
        return view('admin.formats.edit', compact('format'));
    }

    public function update(Request $request, Format $format)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'boolean'
        ]);

        $validated['is_active'] = $request->has('is_active');

        $format->update($validated);

        return redirect()->route('admin.formats.index')
            ->with('success', 'Format updated successfully!');
    }

    public function destroy(Format $format)
    {
        $format->delete();

        return redirect()->route('admin.formats.index')
            ->with('success', 'Format deleted successfully!');
    }
}
