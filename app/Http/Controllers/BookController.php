<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Display all books in the index view (resources/views/layouts/index.blade.php)
    public function index()
    {
        $books = Book::all();
        return view('layouts.index', compact('books'));
    }

    // Display details of a single book in the show view (resources/views/show.blade.php)
    public function show(Book $book)
    {
        return view('show', compact('book'));
    }
}
