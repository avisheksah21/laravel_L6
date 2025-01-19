<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Define book-related categories
        $categories = [
            'Fiction',
            'Non-Fiction',
            'Mystery & Thriller',
            'Science Fiction & Fantasy',
            'Romance',
            'Biography & Memoir',
            'History',
            'Self-Help & Personal Development',
            'Children\'s Books',
            'Young Adult',
            'Horror',
            'Poetry',
            'Comics & Graphic Novels',
            'Cookbooks',
            'Travel',
            'Religion & Spirituality',
            'Business & Economics',
            'Science & Technology',
            'Art & Photography',
            'Education & Teaching',
        ];

        foreach ($categories as $category) {
            Category::create([
                'category_name' => $category,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
