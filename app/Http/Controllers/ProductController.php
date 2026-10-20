<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::select([
            'id',
            'prod_name',
            'price',
        ])->get();

        return Inertia::render('products/index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created product.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified product.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a product.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified product.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified product.
     */
    public function destroy(string $id)
    {
        //
    }
}
