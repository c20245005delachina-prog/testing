<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AuthorProfile;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthorProfileController extends Controller
{
    /**
     * Display a listing of the author profiles.
     */
    public function index()
    {
        $authorProfiles = AuthorProfile::select([
            'id',
            'author_id',
            'bio',
        ])
        ->with([
            'author:id,name,publisher_id',
        ])
        ->get();

        return Inertia::render('author-profiles/index', [
            'authorProfiles' => $authorProfiles
        ]);
    }

    /**
     * Show the form for creating a new author profile.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created author profile.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified author profile.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing an author profile.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified author profile.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified author profile.
     */
    public function destroy(string $id)
    {
        //
    }
}
