@extends('layouts.app')

@section('content')
	
	<table class="table table-light table-bordered table-hover">
		<thead class="thead-dark"><th colspan="4" class="text-center">Posts</th></thead>
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
				Trash
			</th>
		</thead>

		<tbody>
			@if($posts->count() > 0)
				@foreach($posts as $post)
					<tr>
						<td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90" height="50"></td>
						<td>{{ $post->title }}</td>
						<td>
							<a href="{{ route('post.edit', [ 'id' => $post->id ]) }}" class="btn btn-primary">Edit</a>
						</td>
						<td>
							<a href="{{ route('post.delete', [ 'id' => $post->id ]) }}" class="btn btn-danger">Trash</a>
						</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">No published post</th>
				</tr>
			@endif
		</tbody>
	</table>

@endsection