<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Liste des cinémas',
            'data' => Reservation::with(['users'])->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        return response()->json([
            'message' => 'Liste des reservations',
            'data' => Reservation::create($request->all())
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return response()->json([
            'message' => 'reservation demandé',
            'reservation'=>$reservation,
            'users'=>$reservation->users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        $reservation->update($request->all());
        return response()->json([
            'message' => 'reservation mis à jour',
            'data' => $reservation
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response()->json([
            'message' => 'reservation supprimé',
            'data' => null
        ]);
    }
}
