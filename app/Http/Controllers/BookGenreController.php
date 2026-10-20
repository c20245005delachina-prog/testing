<?php

namespace App\Http\Controllers;

use App\Models\BookGenre;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookGenreController extends Controller
{
    /**
     * Display a listing of the book genres.
     */
    public function index()
    {
        $bookGenres = BookGenre::with([
            'book:id,title',
            'genre:id,genre_name',
        ])->get();

        return Inertia::render('book_genres/index', [
            'bookGenres' => $bookGenres,
        ]);
    }

    /**
     * Show the form for creating a new book genre.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created book genre.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified book genre.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a book genre.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified book genre.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified book genre.
     */
    public function destroy(string $id)
    {
        //
    }
}
