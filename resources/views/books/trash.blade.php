@extends('layouts.app')

@section('content')
<h1 class="mb-4">🗑 Daftar Buku yang Dihapus</h1>

<a href="/books" class="btn btn-secondary mb-3">← Kembali</a>

<ul class="list-group">
    @foreach ($books as $book)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            <strong>{{ $book->title }}</strong> - {{ $book->author }}
        </div>
        <div>
        {{-- Tombol Restore --}}
        <form action="{{ route('books.restore', $book->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-sm btn-success"
                onclick="return confirm('Pulihkan buku ini?')">Pulihkan</button>
        </form>

        {{-- Tombol Hapus Permanen --}}
        <form action="{{ route('books.force-delete', $book->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger"
                onclick="return confirm('Yakin ingin menghapus buku ini secara permanen?')">Hapus Permanen</button>
        </form>
    </div>
    </li>
    @endforeach
</ul>
@endsection