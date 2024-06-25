<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Http\Requests\StorereviewRequest;
use App\Http\Requests\UpdatereviewRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([

            'message' => 'Liste des review',
            'data' => Review::with(['films','users'])->get()
        ]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorereviewRequest $request)
    {
        return response()->json([
            'message' => 'Liste des review',
            'data' => Review::create($request->all())
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(review $review)
    {
        return response()->json([
            
            'review'=>$review,
            'films'=>$review->films,
            'users'=>$review->users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatereviewRequest $request, review $review)
    {
        $review->update($request->all());
        return response()->json([
            'message' => 'review mis à jour',
            'data' => $review
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(review $review)
    {
        $review->delete();
        return response()->json([
            'message' => 'review supprimé',
            'data' => null
        ]);
    }
}
