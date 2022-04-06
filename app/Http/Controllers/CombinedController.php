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

        //Checking if the request has anything in it, if not then no comments have been chosen and the error message is displayed 

        if (!$request->has('reflections') && !$request->has('references')){
            return redirect('/')
            ->withErrors(['message' => 'No comments were chosen. Please choose one or more comments from the list below.'])->withInput();
        }

        //returns the selected comments from the checkbox lists, allowing for either reflections or references to have not been selected.
    
        return view('results')->with('results',collect($request->input('reflections') ?? [])->concat($request->input('references') ?? [])->all());

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
