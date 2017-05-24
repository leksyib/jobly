@extends('layouts.frontend')

@section('content')

<div class="jumbotron">
    <div class="container text-center">
    <div class="col-md-6 col-md-offset-3">
        <h3>Find your dream job now!</h3>
        <form>
            <div class="col-md-11">
            <input type="text" placeholder="Job Description" class="form-control" name=""></br>
            </div>                                  
            <div class="col-md-1">
            <input type="submit" class="btn btn-success" value="Search" name="">
            </div>
        </form>
        </div>
    </div>
</div>


<div class="container">

<div class="col-md-6 col-md-offset-3">
    <h3>Recent Listings</h3>
    @foreach($alljobs as $job)
    <div class="panel panel-default">
    <div class="panel-heading">   {{$job->title}}</div>
    <div class="panel-heading">
    {{$job->description}}
    <a class="btn btn-success" href="/jobs/{{$job->id}}">Read more</a>
    </div>
    </div>   

    @endforeach

</div>

@endsection