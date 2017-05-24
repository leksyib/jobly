@extends('layouts.app')

@section('content')
<div class="container">
<div class="panel panel-default">
	<div class="panel-body">
		
	<p>Are you sure you want to delete?</p>
	<form method="post">
	{{csrf_field()}}
	<input type="submit" value="Delete" class="btn btn-danger"> <a class="btn btn-default" href="/home">Cancel</a>
	</form>
	</div>

</div>

</div>
@endsection