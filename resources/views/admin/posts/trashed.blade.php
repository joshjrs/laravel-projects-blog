@extends('layouts.app')

@section('content')
	
	<table class="table table-light table-bordered table-hover">
		<thead class="thead-dark"><th colspan="5" class="text-center">Trashed Posts</th></thead>
		<thead class="thead-dark">
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
				Restore
			</th>
			<th>
				Delete
			</th>
		</thead>

		<tbody>
			
			@if($posts->count() > 0)
				@foreach($posts as $post)
					<tr>
						<td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90" height="50"></td>
						<td>{{ $post->title }}</td>
						<td>Edit</td>
						<td>
							<a href="{{ route('post.restore', [ 'id' => $post->id ]) }}" class="btn btn-success">Restore</a>
						</td>
						<td>
							<a href="{{ route('post.kill', [ 'id' => $post->id ]) }}" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">No trashed post</th>
				</tr>
			@endif
		</tbody>
	</table>

@endsection