<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;
use App\Models\ServiceProduct;

class BooksServiceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the Books category
        $booksCategory = ServiceCategory::where('slug', 'books')->first();

        if (!$booksCategory) {
            $this->command->error('Books category not found. Please run ServiceCategorySeeder first.');
            return;
        }

        $products = [
            [
                'name' => 'Paperback Book',
                'description' => 'Traditional paperback books with flexible cover, perfect for novels, poetry, and general reading. Affordable and lightweight.',
                'price' => 15.00,
                'is_active' => true,
            ],
            [
                'name' => 'Hardback Book',
                'description' => 'Premium hardcover books with durable binding, ideal for keepsakes, photo books, and professional publications.',
                'price' => 35.00,
                'is_active' => true,
            ],
            [
                'name' => 'Special Finish Hardback',
                'description' => 'Luxury hardback books with special finishes like embossing, foil stamping, or textured covers for a premium look.',
                'price' => 50.00,
                'is_active' => true,
            ],
            [
                'name' => 'Comics',
                'description' => 'Comic book printing with vibrant colors and quality paper, suitable for graphic novels and comic series.',
                'price' => 12.00,
                'is_active' => true,
            ],
            [
                'name' => 'Self-Published Book',
                'description' => 'Complete self-publishing solution for authors, including professional layout, printing, and binding options.',
                'price' => 25.00,
                'is_active' => true,
            ],
            [
                'name' => 'Recipe Book',
                'description' => 'Custom recipe books with quality paper and binding, perfect for collecting family recipes or creating cookbooks.',
                'price' => 20.00,
                'is_active' => true,
            ],
            [
                'name' => 'Cookery Book',
                'description' => 'Professional cookbook printing with high-quality photo reproduction and durable binding for kitchen use.',
                'price' => 30.00,
                'is_active' => true,
            ],
            [
                'name' => 'Pocket-Sized Book',
                'description' => 'Compact, portable books perfect for travel guides, pocket notebooks, or mini editions.',
                'price' => 10.00,
                'is_active' => true,
            ],
            [
                'name' => 'Lookbook',
                'description' => 'Fashion and portfolio lookbooks with high-quality image printing, ideal for designers and photographers.',
                'price' => 40.00,
                'is_active' => true,
            ],
            [
                'name' => 'Manga',
                'description' => 'Japanese manga-style book printing with appropriate paper quality and binding for manga collections.',
                'price' => 14.00,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            ServiceProduct::create([
                'service_category_id' => $booksCategory->id,
                'name' => $product['name'],
                'slug' => \Illuminate\Support\Str::slug($product['name']),
                'description' => $product['description'],
                'price' => $product['price'],
                'is_active' => $product['is_active'],
            ]);
        }

        $this->command->info('Books service products seeded successfully!');
    }
}
