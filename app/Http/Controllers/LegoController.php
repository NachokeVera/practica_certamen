<?php

namespace App\Http\Controllers;

use App\Models\Lego;
use Illuminate\Http\Request;

class LegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $legos = Lego::all();
        return response()->json($legos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lego $lego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lego $lego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lego $lego)
    {
        //
    }
}
