<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'author' => 'required|min:3',
        ]);

        Book::create($validated);

        return redirect('/books')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'author' => 'required|min:3',
        ]);

        $book = Book::findOrFail($id);
        $book->update($validated);

        return redirect('/books')->with('success', 'Buku berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('success', 'Buku berhasil dihapus!');
    }
    public function trash()
    {
        $books = Book::onlyTrashed()->get();
        return view('books.trash', compact('books'));
    }

    public function restore($id)
    {
        $book = Book::onlyTrashed()->findOrFail($id);
        $book->restore();

        return redirect('/books')->with('success', 'Buku berhasil dikembalikan!');
    }
}
