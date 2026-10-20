<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::select([
            'id',
            'name',
            'email',
            'email_verified_at',
        ])
        ->with([
            'reviews:id,user_id,stars,comment',
        ])
        ->get();

        return Inertia::render('users/index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created user.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified user.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a user.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified user.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified user.
     */
    public function destroy(string $id)
    {
        //
    }
}
