@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Applications</div>

                <div class="panel-body">
                @foreach($applications as $application)

                <p>{{$application->name}}</p><a href="/application/{{$application->id}}">View</a>

                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
