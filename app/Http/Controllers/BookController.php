<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     */
    public function index()
    {
        $books = Book::select([
            'id',
            'author_id',
            'publisher_id',
            'title',
            'slug',
            'isbn',
            'price',
            'description',
            'image',
        ])
        ->with([
            'author:id,name,publisher_id',
            'publisher:id,publisher_name',
            'genres:id,genre_name',
        ])
        ->get();

        return Inertia::render('books/index', [
            'books' => $books
           
        ]);
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created book.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified book.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a book.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified book.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified book.
     */
    public function destroy(string $id)
    {
        //
    }
}
