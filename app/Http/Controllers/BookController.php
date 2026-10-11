<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';

        $books = Book::all();

        return view('books.index', compact('title', 'description', 'books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}