<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ManagerController extends Controller
{
    /**
     * Display a listing of the managers.
     */
    public function index()
    {
        $managers = Manager::select([
            'id',
            'warehouse_id',
            'manager_name',
        ])
        ->with([
            'warehouse:id,location,supplier_id',
        ])
        ->get();

        return Inertia::render('managers/index', [
            'managers' => $managers,
        ]);
    }

    /**
     * Show the form for creating a new manager.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created manager.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified manager.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a manager.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified manager.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified manager.
     */
    public function destroy(string $id)
    {
        //
    }
}
