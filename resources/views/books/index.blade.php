@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    <ul>
        @foreach($books as $book)
            <li>
                ID: {{ $book->id }} -
                {{ $book->title }} - {{ $book->author }} ({{ $book->year }})
                @if($book->stock > 0)
                    <span>- Tersedia ({{ $book->stock }})</span>
                @else
                    <span>- Habis</span>
                @endif
            </li>
        @endforeach
    </ul>
@endsection