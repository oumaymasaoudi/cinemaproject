<?php

namespace App\Http\Controllers;

use App\Models\Fidelite;
use App\Http\Requests\StoreFideliteRequest;
use App\Http\Requests\UpdateFideliteRequest;

class FideliteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Liste des fidélités',
            'data' => Fidelite::all()
           ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFideliteRequest $request)
    {
        return response()->json([
            'message' => 'Liste des fidélités',
            'data' => Fidelite::create($request->all())
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Fidelite $fidelite)
    {
        return response()->json([
            'message' => 'cinema demandé',
            'data' => $fidelite->load(['fidelite'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFideliteRequest $request, Fidelite $fidelite)
    {
        $fidelite->update($request->all());
        return response()->json([
            'message' => 'fidelite mis à jour',
            'data' => $fidelite
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fidelite $fidelite)
    {
        $fidelite->delete();
        return response()->json([
            'message' => 'fidelite supprimé',
            'data' => null
        ]);
    }
}
