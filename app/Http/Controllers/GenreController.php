<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GenreController extends Controller
{
    /**
     * Display a listing of the genres.
     */
    public function index()
    {
        $genres = Genre::select([
            'id',
            'genre_name',
        ])
        ->with('books:id,title')
        ->get();

        return Inertia::render('genres/index', [
            'genres' => $genres,
        ]);
    }

    /**
     * Show the form for creating a new genre.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created genre.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified genre.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a genre.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified genre.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified genre.
     */
    public function destroy(string $id)
    {
        //
    }
}
