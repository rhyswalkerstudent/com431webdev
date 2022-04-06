@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comments Selected</h1>
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
            <p>Please copy and paste the comments into the student feedback.</p>
        </div>
    </div>

</div>
@endsection