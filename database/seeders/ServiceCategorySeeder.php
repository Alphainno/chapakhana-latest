<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Books',
                'description' => 'Custom book printing services including paperback, hardback, and special finish books',
                'is_active' => true,
            ],
            [
                'name' => 'Business Cards',
                'description' => 'Professional business card printing services',
                'is_active' => true,
            ],
            [
                'name' => 'Stickers & Labels',
                'description' => 'Custom stickers and labels printing for various uses',
                'is_active' => true,
            ],
            [
                'name' => 'Brochures & Flyers',
                'description' => 'High-quality brochure and flyer printing services',
                'is_active' => true,
            ],
            [
                'name' => 'Banners & Signs',
                'description' => 'Large format banner and signage printing',
                'is_active' => true,
            ],
            [
                'name' => 'Catalogs',
                'description' => 'Professional catalog printing services',
                'is_active' => true,
            ],
            [
                'name' => 'Magazines',
                'description' => 'Magazine printing services for publishers',
                'is_active' => true,
            ],
            [
                'name' => 'Stationery',
                'description' => 'Custom stationery printing including letterheads, envelopes, and more',
                'is_active' => true,
            ],
            [
                'name' => 'Zines',
                'description' => 'Independent publication and zine printing',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            ServiceCategory::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
                'is_active' => $category['is_active'],
            ]);
        }
    }
}
