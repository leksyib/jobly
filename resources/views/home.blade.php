@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Job Listings</div>

                <div class="panel-body">
                    @foreach($jobs as $job)

                    <a href="jobs/{{$job->id}}">{{$job->title}}</a> <a href="">View Applications</a></br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
