@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Applicant</div>

                <div class="panel-body">
                <h1>{{$application->name}}</h1>
                <p>{{$application->coverletter}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
