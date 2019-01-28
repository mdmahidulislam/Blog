@extends('layouts.app')



@section('content')



@include('admin.includes.errors')


	<div class="panel panel-default">


		<div class="panel-heading">

			Create a new user 
		 </div>

		 <div class="panel-body">
		 	
		 	<form action="{{route('user.store')}}"method="post" enctype="multipart/form-data">

		 	{{csrf_field()}}

		 	<div class="form-group">
		 		
		 		<label for="title">User</label>

		 		<input type="text" name="name"class="form-control">
		 	</div>

		 	<div class="form-group">
		 		
		 		<label for="title">Email</label>

		 		<input type="email" name="email"class="form-control">
		 	</div>

		 		

		 	<div class="form-group">
		 		<div class="text-center">
		 			<button class="btn-success" type="submit">
		 				Add user
		 			</button>
		 		</div>
		 	</div>

		 </div>


	
	</form>

@stop