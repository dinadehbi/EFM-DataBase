<?php

namespace App\Http\Controllers;

use App\Models\Hike;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hike = Hike::all();
        return view('home', compact('hike'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Hike $hike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hike $hike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hike $hike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hike $hike)
    {
        //
    }
}
