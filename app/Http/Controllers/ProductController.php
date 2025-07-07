<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Products index page";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create product form";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Product stored successfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Show product with ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Edit product with ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Product with ID {$id} updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Product with ID {$id} deleted successfully";
    }
}
