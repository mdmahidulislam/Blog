@extends('layouts.app')






@section('content')

 <div class="panel panel-default">

 	<div class="panel-heading">
 		<a href="{{route('category.create')}}" class="btn btn-xs btn-success">Create a  new tag</a>
 	</div>
 	
 	<div class="panel-body">
 		
 		<table class="table table-hover">
 	
	 		<thead>
	 		
		 		<th>
		 			Category name

		 		</th>


		 		<th>
		 			Editing

		 		</th>


		 		<th>
		 			Deleting

		 		</th>


	 		</thead>

		 	<tbody>

		 		@if($categories->count()>0)
		 		
			 		@foreach($categories as $category)

			 		<tr>
			 			
			 			<td>
			 				{{ $category->name }}

			 			</td>

			 			<td>
			 				
			 				<a href="{{ route('category.edit',['id'=>$category->id])}}" class="btn btn-xs btn-info">

			 				Edit
			 				</a>



			 			</td>

			 			<td>
			 				
			 				<a href="{{ route('category.delete',['id'=>$category->id])}}" class="btn btn-xs btn-danger">

			 				Delete
			 				</a>



			 			</td>
			 				
			 		</tr>

			 		@endforeach

			 	@else

		 			<th colspan="5" class="text-center"> No categories</th>


		 		@endif


		 	</tbody>

	 	</table>
 	</div>
 </div>


@stop