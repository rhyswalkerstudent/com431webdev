@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6">
        this is an example
    </div>
    <form method="POST" action="/">
        @csrf

        {{--Reflections checkboxes loop--}}

    @foreach ($reflections as $reflection)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="reflections[]" value="{{$reflection->longtext}}" id="reflection_{{$loop->index}}">
        <label class="form-check-label" for="reflection_{{$loop->index}}">
            {{$reflection->longtext}}
          </label>
        </div>
        @endforeach


        {{--References checkboxes loop--}}

         @foreach ($references as $reference)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="references[]" value="{{$reference->longtext}}" id="reference_{{$loop->index}}">
            <label class="form-check-label" for="reference_{{$loop->index}}">
              {{$reference->longtext}}
            </label>
          </div>
         @endforeach
         
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
