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
            'category_id' => 2, // Sains
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'year' => 2005,
            'stock' => 3,
            'category_id' => 1, // Fiksi
        ]);

        Book::create([
            'title' => 'Ayah, Mengapa Aku Berbeda',
            'author' => 'Ujang',
            'year' => 2011,
            'stock' => 4,
            'category_id' => 1, // Fiksi
        ]);

        Book::create([
            'title' => 'Majapahit di Masa Manis',
            'author' => 'Aris Artuti',
            'year' => 2020,
            'stock' => 10,
            'category_id' => 3, // Sejarah
        ]);

        Book::create([
            'title' => 'Perkembangan Clone Cell',
            'author' => 'Matashi Kimoto',
            'year' => 2018,
            'stock' => 2,
            'category_id' => 2, // Sains
        ]);
    }
}