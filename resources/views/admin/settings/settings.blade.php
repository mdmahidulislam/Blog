@extends('layouts.app')



@section('content')



@include('admin.includes.errors')


	<div class="panel panel-default">


		<div class="panel-heading">

			Edit blog settings
		 </div>

		 <div class="panel-body">
		 	
		 	<form action="{{route('settings.update')}}"method="post" enctype="multipart/form-data">

		 	{{csrf_field()}}

		 	<div class="form-group">
		 		
		 		<label for="title">Site name</label>

		 		<input type="text" name="site_name" value="{{ $settings->site_name}}" class="form-control">
		 	</div>

		 	<div class="form-group">
		 		
		 		<label for="title">Address</label>

		 		<input type="text" name="address"class="form-control" value="{{ $settings->address}}">
		 	</div>


		 	<div class="form-group">
		 		
		 		<label for="title">Contact number</label>

		 		<input type="text" name="contact_number"class="form-control" value="{{ $settings->contact_number}}">
		 	</div>

		 	<div class="form-group">
		 		
		 		<label for="title">Contact email</label>

		 		<input type="text" name="contact_email"class="form-control" value="{{ $settings->contact_email}}">
		 	</div>

		 		

		 	<div class="form-group">
		 		<div class="text-center">
		 			<button class="btn-success" type="submit">
		 				Update site settings
		 			</button>
		 		</div>
		 	</div>

		 </div>


	
	</form>

@stop