@extends('layouts.app')

@section('content')
    <h1 class="mb-4">📚 Daftar Buku</h1>
    <a href="/books/create" class="btn btn-primary mb-3">+ Tambah Buku</a>

    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $book->title }}</strong><br>
                        <small>Penulis: {{ $book->author }}</small>
                    </div>
                    <div>
                        <a href="/books/{{ $book->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                        <form action="/books/{{ $book->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection