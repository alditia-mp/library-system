<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';

        $books = Book::all();

        return view('books.index', compact('title', 'description', 'books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}