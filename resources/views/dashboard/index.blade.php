@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

        <table border="1" cellpadding="6" cellspacing="0">
            <tr>
                <th>Data</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>Buku</td>
                <td>{{ $totalBooks }}</td>
            </tr>
            <tr>
                <td>Member</td>
                <td>{{ $totalMembers }}</td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>{{ $totalCategories }}</td>
            </tr>
        </table>
@endsection