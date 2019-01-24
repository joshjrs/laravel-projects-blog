@extends('layouts.app')

@section('content')
	
	<table class="table table-light table-bordered table-hover">
		<thead class="thead-dark"><th colspan="3" class="text-center">Categories</th></thead>
		<thead class="thead-dark">
			<th>
				Category Name
			</th>
			<th>
				Edit
			</th>
			<th>
				Delete
			</th>
		</thead>

		<tbody>
			
			@if($categories->count() > 0)
				@foreach($categories as $category)
					<tr>
						<td>
							{{ $category->name }}
						</td>
						<td>
							<a href="{{ route('category.edit', [ 'id' => $category->id ]) }}" class="btn btn-primary btn-xs">Edit</a>
						</td>
						<td>
							<a href="{{ route('category.delete', [ 'id' => $category->id ]) }}" class="btn btn-danger btn-xs">Delete</a>
						</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">No categories</th>
				</tr>
			@endif
		</tbody>
	</table>

@endsection