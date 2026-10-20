<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the warehouses.
     */
    public function index()
    {
        $warehouses = Warehouse::select([
            'id',
            'supplier_id',
            'location',
        ])
        ->with([
            'supplier:id,supplier_name',
            'managers:id,warehouse_id,manager_name',
        ])
        ->get();

        return Inertia::render('warehouses/index', [
            'warehouses' => $warehouses,
        ]);
    }

    /**
     * Show the form for creating a new warehouse.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created warehouse.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified warehouse.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a warehouse.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified warehouse.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified warehouse.
     */
    public function destroy(string $id)
    {
        //
    }
}
