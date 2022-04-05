@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6">
        this is an example
    </div>
    {{-- we want a form to handle selection of references and reflections --}}
    <form method="POST" action="/">
        @csrf

        @foreach ($reflections as $reflection)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="reflections[]" value="{{$reflection->title}}" id="reflection_{{$loop->index}}">
            <label class="form-check-label" for="reflection_{{$loop->index}}">
              {{$reflection->title}}
            </label>
          </div>
         @endforeach
         <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    {{-- Loop over array of $reflections --}}

</div>
@endsection
