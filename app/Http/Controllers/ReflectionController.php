<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReflectionRequest;
use App\Http\Requests\UpdateReflectionRequest;
use App\Models\Reflection;
use Illuminate\Http\Request;


class ReflectionController extends Controller
{
    
    
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //This forces a user to be authenticated in order to add new references
        //$this->middleware('auth');
    }
    
    
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
        return view('Reflections.createRefl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $reflection = new Reflection;
 
      $reflection->longtext = $request->longtext;

      $reflection->save();

      return redirect('/reflections/create')->with('status', 'Reflection created!');
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
