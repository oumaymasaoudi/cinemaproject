<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Http\Requests\StoreSeanceRequest;
use App\Http\Requests\UpdateSeanceRequest;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$seances = Seance::with(['film'])->get();
        //return response()->json(Seance::all());
        //return response()->json([

           return response()->json([
            'message' => 'Liste des seances',
            'data' => Seance::with(['salle'])->get()
        ]);
       
        }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSeanceRequest $request)
    {
        return response()->json([
            'message' => 'Liste des séances',
            'data' => Seance::create($request->all())
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Seance $seance)
    {
        return response()->json([
            'message' => 'séance demandée',
            //'data' => $seance->load(['films'])
            'seance'=>$seance,
            'salles'=>$seance->salles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeanceRequest $request, Seance $seance)
    {
        $seance->update($request->all());
        return response()->json([
            'message' => 'séance mis à jour',
            'data' => $seance
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seance $seance)
    {
        $seance->delete();
        return response()->json([
            'message' => 'séance supprimé',
            'data' => null
        ]);
    }
}
