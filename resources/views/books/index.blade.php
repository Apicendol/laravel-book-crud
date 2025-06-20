@extends('layouts.app')

@section('content')
    <h1 class="mb-4">📚 Daftar Buku</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">+ Tambah Buku</a>
    <a href="{{ route('books.trash') }}" class="btn btn-warning mb-3">📦 Lihat Recycle Bin</a>

    {{-- ALERT NOTIFIKASI --}}
    <x-alert />

    {{-- Next Update: Search Bar --}}

    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $book->title }}</strong><br>
                        <small>Penulis: {{ $book->author }}</small>
                    </div>
                    <div>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
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