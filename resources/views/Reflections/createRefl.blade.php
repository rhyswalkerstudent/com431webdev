@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6">
        <h3>Enter The Comment You Wish to Add To The Reflections Comment Bank</h3>
        <br>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
       </div>
       @endif
        <form method="POST" action="{{route('reflections.store')}}">

            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text gray-700"
                for="Comment"
                >
                </label>
            
                <input class="boarder border-gray-400 p-2 w-full"
                       type="text"
                       name="longtext"
                       id="longtext"
                       required
                       >

                       @error('longtext')
                       <p class="text-red-500 text-xs mt-2">{{"There was no comment input. Please input a comment"}}</p>
                       @enderror
                       
            <br><br> <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection