@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Penulis</label>
            <input type="text" name="author" value="{{ old('author') }}">
            @error('author')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year" value="{{ old('year') }}">
            @error('year')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Stok</label>
            <input type="number" name="stock" value="{{ old('stock') }}">
            @error('stock')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Kategori</label>
            <select name="category_id">
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>

    <p><a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a></p>
@endsection