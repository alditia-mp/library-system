<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';

        $books = [
            ['title' => 'Pemrograman PHP', 'author' => 'Budi Raharjo', 'year' => 2020],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Andi Wijaya', 'year' => 2022],
            ['title' => 'Basis Data', 'author' => 'Siti Aminah', 'year' => 2019],
            ['title' => 'Algoritma dan Pemrograman', 'author' => 'Rina Kartika', 'year' => 2021],
            ['title' => 'Pemrograman Berorientasi Objek', 'author' => 'Dedi Santoso', 'year' => 2023],
        ];

        $stock = 7;

        return view('books.index', compact('title', 'description', 'books', 'stock'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}
