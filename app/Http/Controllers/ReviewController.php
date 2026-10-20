<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     */
    public function index()
    {
        $reviews = Review::select([
            'id',
            'user_id',
            'stars',
            'comment',
        ])
        ->with([
            'user:id,name,email',
        ])
        ->get();
        
        dd($reviews);
        return Inertia::render('reviews/index', [
            'review' => $reviews,
        ]);
    }

    /**
     * Show the form for creating a new review.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created review.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified review.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a review.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified review.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified review.
     */
    public function destroy(string $id)
    {
        //
    }
}
