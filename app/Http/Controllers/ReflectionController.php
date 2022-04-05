<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReflectionRequest;
use App\Http\Requests\UpdateReflectionRequest;
use App\Models\Reflection;

class ReflectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReflectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReflectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reflection  $reflection
     * @return \Illuminate\Http\Response
     */
    public function show(Reflection $reflection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reflection  $reflection
     * @return \Illuminate\Http\Response
     */
    public function edit(Reflection $reflection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReflectionRequest  $request
     * @param  \App\Models\Reflection  $reflection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReflectionRequest $request, Reflection $reflection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reflection  $reflection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reflection $reflection)
    {
        //
    }
}
