<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Liste des utilisateurs',
            'data' => User::all()
           ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        return response()->json([
            'message' => 'Liste des utilisateurs',
            'data' => User::create($request->all())
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json([
           

            'user'=>$user,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            'message' => 'User mis à jour',
            'data' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'user supprimé',
            'data' => null
        ]);
    }
}
