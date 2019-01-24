@extends('layouts.app')

@section('content')
	
	<table class="table table-light table-bordered table-hover">
		<thead class="thead-dark"><th colspan="4" class="text-center">Users</th></thead>
		<thead class="thead-dark">
			<th>
				Image
			</th>
			<th>
				Name
			</th>
			<th>
				Permissions
			</th>
			<th>
				Delete
			</th>
		</thead>

		<tbody>
			@if($users->count() > 0)
				@foreach($users as $user)
					<tr>
						<td>
							<img src="{{ asset($user->profile->avatar) }}" align="" width="60" height="60" style="border-radius: 50%;">
						</td>
						<td>
							{{ $user->name }}
						</td>
						<td>
							@if($user->admin)
								<a href="{{ route('user.not.admin', [ 'id' => $user->id ]) }}" class="btn btn-danger">Remove Permission</a>
							@else 
								<a href="{{ route('user.admin', [ 'id' => $user->id ]) }}" class="btn btn-success">Make Admin</a>
							@endif
						</td>
						<td>
							@if(Auth::id() !== $user->id)
								<a href="{{ route('user.delete', [ 'id' => $user->id ]) }}" class="btn btn-danger">Delete</a>
							@endif
							
						</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">No users</th>
				</tr>
			@endif
		</tbody>
	</table>

@endsection