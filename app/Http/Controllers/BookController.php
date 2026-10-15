<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Validation\Rule;

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
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255|unique:books,title',
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique('books', 'title')->ignore($book->id),
            ],
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil diperbarui.');
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