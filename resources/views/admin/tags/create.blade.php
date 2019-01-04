@extends('layouts.app')



@section('content')



@include('admin.includes.errors')


	<div class="panel panel-default">


		<div class="panel-heading">

			Create a new tag 
		 </div>

		 <div class="panel-body">
		 	
		 	<form action="{{route('tag.store')}}"method="post" enctype="multipart/form-data">

		 	{{csrf_field()}}

		 	<div class="form-group">
		 		
		 		<label for="title">Tags</label>

		 		<input type="text" name="tag"class="form-control">
		 	</div>

		 		

		 	<div class="form-group">
		 		<div class="text-center">
		 			<button class="btn-success" type="submit">
		 				Store Tag
		 			</button>
		 		</div>
		 	</div>

		 </div>


	
	</form>

@stop