<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Electronics', 'Clothing', 'Books', 'Home', 'Sports', 'Beauty', 'Toys', 'Food'];
        $adjectives = ['Premium', 'Deluxe', 'Professional', 'Smart', 'Wireless', 'Digital', 'Portable', 'Advanced'];
        $products = ['Laptop', 'Phone', 'Headphones', 'Watch', 'Camera', 'Speaker', 'Tablet', 'Monitor', 'Keyboard', 'Mouse'];
        
        for ($i = 1; $i <= 10000; $i++) {
            Product::create([
                'name' => $adjectives[array_rand($adjectives)] . ' ' . $products[array_rand($products)] . ' ' . $i,
                'description' => 'High-quality product with excellent features and modern design for everyday use',
                'price' => rand(500, 50000),
                'quantity' => rand(1, 100)
            ]);
        }
    }
}
