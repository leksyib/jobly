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
    @foreach($alljobs as $job)
    <div class="panel panel-default">
        <div class="panel-body">
        <h3><a href="/jobs/{{$job->id}}">{{$job->title}}</a></h3>
        <p>Employer Name</p>
        <p>Attractive package
        Great career opportunities
        A solid career with an iconic Australian owned company
        Fantastic opportunity for a highly motivated Account Manager with a passion for growing business through well developed contacts</p>
        </div>
    </div>
    @endforeach
</div>


</div>

@endsection