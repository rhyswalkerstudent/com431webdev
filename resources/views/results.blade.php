@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Results</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($results as $result)
                        <p>{{$result}}</p>
                    @endforeach
                </div>
              </div>
        </div>
        <div class="col-12">
            <p>Please copy and paste your results</p>
        </div>
    </div>

</div>
@endsection