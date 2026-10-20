<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SupplierController extends Controller
{
    /**
     * Display a listing of the suppliers.
     */
    public function index()
    {
        $suppliers = Supplier::select([
            'id',
            'supplier_name',
        ])
        ->with([
            'warehouses:id,supplier_id,location',
        ])
        ->get();

        return Inertia::render('suppliers/index', [
            'suppliers' => $suppliers,
        ]);
    }

    /**
     * Show the form for creating a new supplier.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created supplier.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified supplier.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a supplier.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified supplier.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified supplier.
     */
    public function destroy(string $id)
    {
        //
    }
}
