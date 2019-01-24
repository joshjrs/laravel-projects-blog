@extends('layouts.app')

@section('content')
	
	@include('admin.includes.errors')

	<div class="card">
		<div class="card-header">
			Crate a new Tag
		</div>
		<div class="card-body">
			<form action="{{ route('tag.store') }}" method="post">
				@csrf
				<div class="form-group">
					<label for="tag">Tag</label>
					<input type="text" name="tag" class="form-control">
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Store Tag</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection