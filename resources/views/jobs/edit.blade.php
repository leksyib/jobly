@extends('layouts.app')



@section('content')

<div class="container">

<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-heading">Edit Job Listing</div>
<div class="panel-body">
	<form method="POST" action="/jobs/{{$job->id}}/edit"> 
		{{csrf_field()}}
		<input type="text" value="{{$job->title}}"  placeholder="Job Title" class="form-control" name="title"></br>
		<input type="text"  value="{{$job->provider}}" placeholder="Job Provider" class="form-control" name="provider"></br>
		<input type="text" value="{{$job->location}}" placeholder="Job Location" class="form-control" name="location"></br>
		<input type="text" value="{{$job->classification}}" name="classification" placeholder="Job Classification" class="form-control"></br>
		<input type="text" value="{{$job->type}}" name="type" placeholder="Work Type" class="form-control"></br>
		<input type="text" value="{{$job->applicationsclose}}" name="enddate" placeholder="Application End Date" class="form-control" name="title"></br>
		<textarea class="form-control" name="description" value="{{$job->description}}" rows="6" placeholder="Job Description"></textarea></br>
		<input type="submit" value="Update Job Listing" class="btn btn-default">
	</form>
</div>

</div>

</div>

</div>


@endsection