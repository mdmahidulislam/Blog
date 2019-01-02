@extends('layouts.app')






@section('content')

 <div class="panel panel-default">

 		<div class="panel-heading">
 		
 		Published Posts
 	</div>
 	
 	<div class="panel-body">
 		
 		<table class="table table-hover">
 	
	 		<thead>
	 		
		 		<th>
		 			Image

		 		</th>


		 		<th>
		 			Title

		 		</th>


		 		<th>
		 			Edit

		 		</th>

		 		<th>
		 			Delete

		 		</th>

		 		<th>
		 			Destroy

		 		</th>


	 		</thead>

		 	<tbody>

		 		@if($posts->count()>0)
		 		
			 		@foreach($posts as $post)

			 			<tr>  

			 				<td> <img src="{{ $post->featured }}" alt="{{ $post->title}}" width="50px" height="50px"> </td>
			 				
			 				<td> {{ $post->title }}</td>
			 				
			 				<td>
			 					
			 					<a href="{{ route('post.edit', ['id'=> $post->id])}}" class="btn btn-info"> Edit</a>
			 				</td>
			 				
			 				<td>
			 					<a href="{{ route('post.delete', ['id'=> $post->id])}}" class="btn btn-danger"> Trash</a>
			 				</td>

			 				<td>
			 					<a href="{{ route('post.kill', ['id'=> $post->id])}}" class="btn btn-danger"> Delete</a>
			 				</td>


			 			</tr>

			 		@endforeach

			 	@else

		 			<th colspan="5" class="text-center"> No published posts</th>


		 		@endif

		 	</tbody>

	 	</table>
 	</div>
 </div>


@stop