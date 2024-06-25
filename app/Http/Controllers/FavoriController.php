<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use App\Http\Requests\StoreFavoriRequest;
use App\Http\Requests\UpdateFavoriRequest;

class FavoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFavoriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Favori $favori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoriRequest $request, Favori $favori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favori $favori)
    {
        //
    }
}
