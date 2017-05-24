@extends('layouts.app')



@section('content')

<div class="container">

<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-heading">Create New Job Listing</div>
<div class="panel-body">
	<form method="POST" action="/jobs/create"> 
		{{csrf_field()}}
		<input type="text"  placeholder="Job Title" class="form-control" name="title"></br>
		<input type="text"  placeholder="Job Provider" class="form-control" name="provider"></br>
		<input type="text" placeholder="Job Location" class="form-control" name="location"></br>
		<input type="text" name="classification" placeholder="Job Classification" class="form-control"></br>
		<input type="text" name="type" placeholder="Work Type" class="form-control"></br>
		<input type="text" name="enddate" placeholder="Application End Date" class="form-control" name="title"></br>
		<textarea class="form-control" name="description" rows="6" placeholder="Job Description"></textarea></br>
		<input type="submit" value="Create New Job Listing" class="btn btn-default">
	</form>
</div>

</div>

</div>

</div>


@endsection