@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    <p><a href="{{ route('books.create') }}">+ Tambah Buku</a></p>

    <ul>
        @foreach($books as $book)
            <li>
                ID: {{ $book->id }} -
                {{ $book->title }} - {{ $book->author }} ({{ $book->year }})
                @if($book->stock > 0)
                    <span>- Stok Tersedia ({{ $book->stock }})</span>
                @else
                    <span>- Stok Habis</span>
                @endif

                <a href="{{ route('books.edit', $book) }}">Edit</a>

                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus buku ini?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection