@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    <ul>
        @foreach($books as $book)
            <li>{{ $book['title'] }} - {{ $book['author'] }} ({{ $book['year'] }})</li>
        @endforeach
    </ul>

    @if($stock > 0)
        <p>Buku tersedia.</p>
    @else
        <p>Buku sedang habis.</p>
    @endif
@endsection