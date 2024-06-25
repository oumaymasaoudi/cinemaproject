<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Http\Requests\StoreAvisRequest;
use App\Http\Requests\UpdateAvisRequest;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Liste des avis',
            'data' => Avis::all()
           ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAvisRequest $request)
    {
        return response()->json([
            'message' => 'Liste des avis',
            'data' => Avis::create($request->all())
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Avis $avis)
    {
        return response()->json([
            'message' => 'avis demandé',
            'data' => $avis->load(['avis'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAvisRequest $request, Avis $avis)
    {
        $avis->update($request->all());
        return response()->json([
            'message' => 'avis mis à jour',
            'data' => $avis
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avis $avis)
    {
        $avis->delete();
        return response()->json([
            'message' => 'avis supprimé',
            'data' => null
        ]);
    }
}
