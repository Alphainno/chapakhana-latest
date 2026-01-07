@extends('admin.layouts.app')

@section('title', 'Edit Service Product')

@section('content')
<div class="max-w-3xl mx-auto space-y-6">
    <div class="flex items-center gap-3">
        <a href="{{ route('admin.service-products.index') }}" class="text-gray-600 hover:text-gray-900">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
        </a>
        <h1 class="text-2xl font-bold text-gray-900">Edit Service Product</h1>
    </div>

    <div class="bg-white rounded-lg shadow-lg border border-gray-200 p-8">
        <form action="{{ route('admin.service-products.update', $serviceProduct) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="service_category_id" class="block text-sm font-semibold text-gray-800 mb-2">Service Category <span class="text-red-500">*</span></label>
                <select name="service_category_id" id="service_category_id" class="mt-1 block w-full px-4 py-3 border-2 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" required>
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('service_category_id', $serviceProduct->service_category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('service_category_id')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="name" class="block text-sm font-semibold text-gray-800 mb-2">Product Name <span class="text-red-500">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name', $serviceProduct->name) }}" class="mt-1 block w-full px-4 py-3 border-2 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" placeholder="Enter product name" required>
                @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-semibold text-gray-800 mb-2">Description</label>
                <textarea name="description" id="description" rows="5" class="mt-1 block w-full px-4 py-3 border-2 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" placeholder="Enter product description (optional)">{{ old('description', $serviceProduct->description) }}</textarea>
                @error('description')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="price" class="block text-sm font-semibold text-gray-800 mb-2">Price (৳) <span class="text-red-500">*</span></label>
                <input type="number" name="price" id="price" value="{{ old('price', $serviceProduct->price) }}" step="0.01" min="0" class="mt-1 block w-full px-4 py-3 border-2 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" placeholder="0.00" required>
                @error('price')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-semibold text-gray-800 mb-2">Product Image</label>
                <div id="imagePreview" class="{{ $serviceProduct->image ? '' : 'hidden' }} mb-3">
                    @php
                        $imageUrl = $serviceProduct->image;
                        if ($imageUrl && !filter_var($imageUrl, FILTER_VALIDATE_URL)) {
                            $imageUrl = asset('uploads/service-products/' . $imageUrl);
                        }
                    @endphp
                    <img id="previewImg" src="{{ $imageUrl }}" alt="{{ $serviceProduct->name }}" class="w-32 h-32 object-cover rounded-lg border-2 border-gray-200">
                    <p class="text-sm text-gray-500 mt-1">{{ $serviceProduct->image ? 'Current image' : 'Image preview' }}</p>
                </div>
                <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full px-4 py-3 border-2 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all" onchange="previewImage(event)">
                <p class="mt-1 text-xs text-gray-500">Leave empty to keep current image</p>
                @error('image')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <div class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $serviceProduct->is_active) ? 'checked' : '' }} class="w-5 h-5 rounded border-2 border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500">
                    <label for="is_active" class="ml-3 text-sm font-medium text-gray-700">Active Status</label>
                </div>
                <p class="mt-2 ml-8 text-xs text-gray-500">Check to make this product visible on the shop page</p>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition">Update Product</button>
                <a href="{{ route('admin.service-products.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-2 rounded-lg transition">Cancel</a>
            </div>
        </form>
    </div>
</div>

<script>
function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('imagePreview').classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    }
}
</script>
@endsection
