@extends('layout')
@section('content')
	<button class="create-post btn btn-primary">Create Post</button>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>User Name</th>
				<th>Post Title</th>
				<th>Post Content</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
				<tr>
					<td>{{ optional($post->user)->name ?: 'N/A'}}</td>
					<td>{{$post->title}}</td>
					<td>{{$post->content}}</td>
					<td>
						<form action="{{action('PostController@destroy', $post->id)}}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger" type="submit">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
@section('scripts')
	<script>
		$('.create-post').on('click', function(){
			$('#modal-form').modal('show');
		});
		$('.ajax-form').on('submit', function(e){
			e.preventDefault();
			var $data = $(this).serialize();
			$.ajax({
				url : '{{action("PostController@store")}}',
				data : $data,
				type: 'POST',
				success : function(data)
				{
					alert(data.message);
				}
			})

		})
	</script>
@endsection