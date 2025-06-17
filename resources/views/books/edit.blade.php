@extends('layouts.app')

@section('content')
<h1 class="mb-4">✏️ Edit Buku</h1>

<form method="POST" action="/books/{{ $book->id }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Judul Buku</label>
        <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Penulis</label>
        <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
