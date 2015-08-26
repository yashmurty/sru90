@extends('admin.main')

@section('content')

		@include('admin.navtop')   

		<div class="container">
			<a href="{{ URL::Route('admin-explore') }}" class="btn btn-primary">Edit Explore</a>
		</div>

@stop

@section('jscontent')
	
@stop