<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Bitcoin di Bidang Kesehatan',
            'author' => 'Andi Nugroho',
            'year' => 2024,
            'stock' => 5,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'year' => 2005,
            'stock' => 3,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => 'Ayah, Mengapa Aku Berbeda',
            'author' => 'Ujang',
            'year' => 2011,
            'stock' => 4,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => 'Majapahit di Masa Manis',
            'author' => 'Aris Artuti',
            'year' => 2020,
            'stock' => 10,
            'category_id' => 3,
        ]);

        Book::create([
            'title' => 'Perkembangan Clone Cell',
            'author' => 'Matashi Kimoto',
            'year' => 2018,
            'stock' => 2,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'Cut Nyak Dien dan Keberaniannya',
            'author' => 'Kelish Joko',
            'year' => 2011,
            'stock' => 11,
            'category_id' => 5,
        ]);

        Book::create([
            'title' => 'Pahami Mereka dengan Mata',
            'author' => 'Sheryl Abby',
            'year' => 2020,
            'stock' => 9,
            'category_id' => 4,
        ]);

        Book::create([
            'title' => 'Pedagang Masa Kini',
            'author' => 'Suryo Aji Cipta',
            'year' => 2026,
            'stock' => 2,
            'category_id' => 4,
        ]);

        Book::create([
            'title' => 'Astuti Pujaan Hati',
            'author' => 'Kendrick Lamar',
            'year' => 2009,
            'stock' => 2,
            'category_id' => 1,
        ]);

        Book::create([
            'title' => '2026 Nobel Prize Winners And Their Brains',
            'author' => 'Sandra Bullock',
            'year' => 2026,
            'stock' => 5,
            'category_id' => 2,
        ]);
    }
}