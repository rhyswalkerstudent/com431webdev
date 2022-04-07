@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6">
        <h1>Please Select Any Comments Which Are Applicable to the Student's Work.</h1>
        <br>
    </div>
    {{--Error Alert--}}

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form method="POST" action="/">
        @csrf

        {{--Reflections checkboxes loop--}}

        <h3>Reflections</h3>
    @foreach ($reflections as $reflection)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="reflections[]" value="{{$reflection->longtext}}" id="reflection_{{$loop->index}}">
        <label class="form-check-label" for="reflection_{{$loop->index}}">
            {{$reflection->longtext}}
          </label>
        </div>
        @endforeach


        {{--References checkboxes loop--}}

        <h3>References</h3>
         @foreach ($references as $reference)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="references[]" value="{{$reference->longtext}}" id="reference_{{$loop->index}}">
            <label class="form-check-label" for="reference_{{$loop->index}}">
              {{$reference->longtext}}
            </label>
          </div>
         @endforeach
         
         <br><p>Click Submit to select the comments checked above.</p>
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    @auth
    <a href="\createRefl" class="text-xs font-bold uppercase">Create New Reflection</a>
    <a href="\createRefe" class="text-xs font-bold uppercase">Create New Reference</a>
    @endauth
</div>
@endsection
