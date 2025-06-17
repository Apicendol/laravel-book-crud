@extends('layouts.app')

@section('content')
<h1 class="mb-4">🗑 Daftar Buku yang Dihapus</h1>

<a href="/books" class="btn btn-secondary mb-3">← Kembali</a>

<ul class="list-group">
@foreach ($books as $book)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $book->title }} - {{ $book->author }}
        <form action="/books/{{ $book->id }}/restore" method="POST">
            @csrf
            @method('PUT')
            <button class="btn btn-sm btn-success">Restore</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
