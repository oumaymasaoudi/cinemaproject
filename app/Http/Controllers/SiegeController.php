<?php

namespace App\Http\Controllers;

use App\Models\Siege;
use App\Http\Requests\StoreSiegeRequest;
use App\Http\Requests\UpdateSiegeRequest;


class SiegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Liste des sièges',
            'data' => Siege::with(['salles'])->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiegeRequest $request)
    {
        return response()->json([
            'message' => 'Liste des sièges',
            'data' => Siege::create($request->all())
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Siege $siege)
    {
        return response()->json([
            'message' => 'siège demandé',
            'siege'=>$siege,
            'salles'=>$siege->salles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiegeRequest $request, Siege $siege)
    {
        $siege->update($request->all());
        return response()->json([
            'message' => 'siège mis à jour',
            'data' => $siege
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siege $siege)
    {
        $siege->delete();
        return response()->json([
            'message' => 'siege supprimé',
            'data' => null
        ]);
    }
}
