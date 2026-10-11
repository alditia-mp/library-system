@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <p>Judul: <input type="text" name="title" required></p>
        <p>Penulis: <input type="text" name="author" required></p>
        <p>Tahun: <input type="number" name="year" required></p>
        <p>Stok: <input type="number" name="stock" required></p>

        <p>
            Kategori:
            <select name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </p>

        <button type="submit">Simpan</button>
    </form>

    <p><a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a></p>
@endsection