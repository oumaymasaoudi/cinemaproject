<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Liste des films',
            'data' => Film::all()
           ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        return response()->json([
            'message' => 'Liste des films',
            'data' => Film::create($request->all())
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return response()->json([
            //'message' => 'film demandé',
            //'data' => $film->load(['film'])

            'film'=>$film,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $film->update($request->all());
        return response()->json([
            'message' => 'film mis à jour',
            'data' => $film
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return response()->json([
            'message' => 'film supprimé',
            'data' => null
        ]);
    }
}
