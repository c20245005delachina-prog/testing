<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthorController extends Controller
{
    /**
     * Display a listing of the authors.
     */
    public function index()
    {
        $authors = Author::select([
            'id',
            'name',
            'publisher_id'
        ])
        ->with([
            'publisher:id,publisher_name',
            'profile:id,author_id,bio',
            'books:id,author_id,publisher_id,title,slug'
        ])
        ->get();
        return Inertia::render('authors/index', [
            'authors' => $authors,
        ]);
    }

    /**
     * Show the form for creating a new author.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created author.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified author.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing an author.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified author.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified author.
     */
    public function destroy(string $id)
    {
        //
    }
}
