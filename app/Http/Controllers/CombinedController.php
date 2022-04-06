<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCombinedRequest;
use App\Http\Requests\UpdateCombinedRequest;
use App\Models\Combined;
use App\Models\Reflection;
use App\Models\Reference;

class CombinedController extends Controller
{
  
    public function index()
    {
        $reflections = Reflection::all();
        $references = Reference::all();
        return view('combined')
            ->with('reflections',$reflections)
            ->with('references',$references);
    }

  
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCombinedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCombinedRequest $request)
    {
        //Combine reflections and results using collections on docs
        //pass combined reflect and reference to view, output

        return view('results')->with('results'),collect($request->input('reflections'))->concat($request->input('references'))->all();    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Combined  $combined
     * @return \Illuminate\Http\Response
     */
    public function show(Combined $combined)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Combined  $combined
     * @return \Illuminate\Http\Response
     */
    public function edit(Combined $combined)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCombinedRequest  $request
     * @param  \App\Models\Combined  $combined
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCombinedRequest $request, Combined $combined)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Combined  $combined
     * @return \Illuminate\Http\Response
     */
    public function destroy(Combined $combined)
    {
        //
    }
}
