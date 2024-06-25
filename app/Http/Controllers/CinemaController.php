<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Http\Requests\StoreCinemaRequest;
use App\Http\Requests\UpdateCinemaRequest;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \
     */
    public function index()
    {
        return response()->json([

            'message' => 'Liste des cinémas',
            'data' => Cinema::with(['films','salles'])->get()
        ]);
       
    }
    public function store(StoreCinemaRequest $request)
    {
        
        return response()->json([
        'message' => 'Liste des cinémas',
        'data' => Cinema::create($request->all())
    ], 201); 
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Cinema $cinema)
    {
        return response()->json([
            //'message' => 'cinema demandé',
            //'data' => $cinema->load(['films'])
            'cinema'=>$cinema,
            'films'=>$cinema->films,
            'salles'=>$cinema->salles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCinemaRequest $request, Cinema $cinema)
    {
        $cinema->update($request->all());
        return response()->json([
            'message' => 'cinema mis à jour',
            'data' => $cinema
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cinema $cinema)
    {
        $cinema->delete();
        return response()->json([
            'message' => 'cinema supprimé',
            'data' => null
        ]);
    }
}
