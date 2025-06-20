@extends('layouts.app')

@section('content')
<h1 class="mb-4">✏️ Edit Buku</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Judul Buku</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $book->title) }}" required>
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Penulis</label>
        <input type="text" name="author" class="form-control" value="{{ old('author', $book->author) }}" required>
        @error('author')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
