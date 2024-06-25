<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Http\Requests\StoreSalleRequest;
use App\Http\Requests\UpdateSalleRequest;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Liste les salles',
            'data' => Salle::all()
           ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSalleRequest $request)
    {
        return response()->json([
            'message' => 'Liste des salles',
            'data' => Salle::create($request->all())
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Salle $salle)
    {
        return response()->json([
            //'message' => 'salle demandée',
            //'data' => $salle->load(['cinemas'])

            'salle'=>$salle,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSalleRequest $request, Salle $salle)
    {
        $salle->update($request->all());
        return response()->json([
            'message' => 'salle mis à jour',
            'data' => $salle

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salle $salle)
    {
        $salle->delete();
        return response()->json([
            'message' => 'salle supprimé',
            'data' => null
        ]);
    }
}
