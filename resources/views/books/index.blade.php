@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <p><a href="{{ route('books.create') }}">+ Tambah Buku</a></p>

        <table border="1" cellpadding="6" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->category?->name ?? 'Belum ada kategori' }}</td>
                    <td>
                        @if($book->stock > 0)
                            Tersedia ({{ $book->stock }})
                        @else
                            Habis
                        @endif
                    </td>
                    <td>
                        <button type="button" onclick="window.location='{{ route('books.edit', $book) }}'">Edit</button>

                        @can('delete', $book)
                            <form action="{{ route('books.destroy', $book->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus buku ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit">Delete</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </table>

@endsection