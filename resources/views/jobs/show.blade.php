@extends('layouts.frontend')


@section('content')

<div class="container">

<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
	<div class="panel-heading">
		{{$job->title}}
	</div>
	<div class="panel-body">
		{{$job->description}}
	</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
Apply for job
</div>
<div class="panel-body">
<form method="post" enctype="multipart/form-data"> 
	<input type="text" class="form-control" placeholder="Full Name" name="name"></br>
	<label>Upload Resume</label>
	{{csrf_field()}}
	<input type="file" name="resume" placeholder="Full Name" name=""></br>
	<textarea type="text" rows="12" class="form-control" placeholder="Write Cover Letter" name="coverletter"></textarea></br>
	<input type="submit" class="btn btn-success" name="">


</form>

</div>
</div>


</div>
</div>

@endsection