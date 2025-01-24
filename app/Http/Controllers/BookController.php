<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.viewBooks', compact('books'));
    }

    public function create()
    {
        return view('books.addBooks');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
        ]);

        Book::create($validated);

        return redirect()->route('books.view')->with('success', 'Book added successfully.');
    }

    public function edit(Book $book)
    {
        return view('books.editBooks', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
        ]);

        $book->update($validated);

        return redirect()->route('books.view')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.view')->with('success', 'Book deleted successfully.');
    }
}
