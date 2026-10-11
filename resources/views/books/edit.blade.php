@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <p>Judul: <input type="text" name="title" value="{{ $book->title }}" required></p>
        <p>Penulis: <input type="text" name="author" value="{{ $book->author }}" required></p>
        <p>Tahun: <input type="number" name="year" value="{{ $book->year }}" required></p>
        <p>Stok: <input type="number" name="stock" value="{{ $book->stock }}" required></p>

        <p>
            Kategori:
            <select name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == $book->category_id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </p>

        <button type="submit">Update</button>
    </form>

    <p><a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a></p>
@endsection