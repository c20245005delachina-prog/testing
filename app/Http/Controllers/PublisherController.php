<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PublisherController extends Controller
{
    /**
     * Display a listing of the publishers.
     */
    public function index()
    {
        $publishers = Publisher::select([
            'id',
            'publisher_name',
        ])
        ->with([
            'authors:id,name,publisher_id',
            'books:id,title,publisher_id',
        ])
        ->get();

        return Inertia::render('publishers/index', [
            'publishers' => $publishers,
        ]);
    }

    /**
     * Show the form for creating a new publisher.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created publisher.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified publisher.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a publisher.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified publisher.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified publisher.
     */
    public function destroy(string $id)
    {
        //
    }
}
