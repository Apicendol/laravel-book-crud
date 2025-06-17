@extends('layouts.app')

@section('content')
<h1 class="mb-4">✏️ Tambah Buku Baru</h1>

<form method="POST" action="/books">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul Buku</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Penulis</label>
        <input type="text" name="author" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
