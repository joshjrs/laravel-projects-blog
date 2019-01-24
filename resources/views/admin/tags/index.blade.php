@extends('layouts.app')

@section('content')
	
	<table class="table table-light table-bordered table-hover">
		<thead class="thead-dark"><th colspan="3" class="text-center">Tags</th></thead>
		<thead class="thead-dark">
			<th>
				Tag Name
			</th>
			<th>
				Edit
			</th>
			<th>
				Delete
			</th>
		</thead>

		<tbody>
			
			@if($tags->count() > 0)
				@foreach($tags as $tag)
					<tr>
						<td>
							{{ $tag->tag }}
						</td>
						<td>
							<a href="{{ route('tag.edit', [ 'id' => $tag->id ]) }}" class="btn btn-primary btn-xs">Edit</a>
						</td>
						<td>
							<a href="{{ route('tag.delete', [ 'id' => $tag->id ]) }}" class="btn btn-danger btn-xs">Delete</a>
						</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">No tags yet</th>
				</tr>
			@endif
		</tbody>
	</table>

@endsection