<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorUserRequest $request)
    {


        if ($request->hasFile('image')) {
            $image_url = $request->file('image')->store('images', 'public');
            $request->merge(['image_url' => $image_url]);
        }

            $user = User::create($request->all());
            return response()->json([
                'data' => $user,
                'message' => 'User created successfully',
                'status' => 201
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
