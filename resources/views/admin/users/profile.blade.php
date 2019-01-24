@extends('layouts.app')

@section('content')
	
	@include('admin.includes.errors')

	<div class="card">
		<div class="card-header">
			Edit your Profile
		</div>
		<div class="card-body">
			<form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="name">Username</label>
					<input type="text" name="name" value="{{ $user->name }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" value="{{ $user->email }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">New Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label for="avatar">Upload New Avatar</label>
					<input type="file" name="avatar" class="form-control">
				</div>
				<div class="form-group">
					<label for="facebook">Facebook Profile</label>
					<input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="youtube">Youtube Profile</label>
					<input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="about">About You</label>
					<textarea class="form-control" name="about" id="about" cols="6" rows="6">{{ $user->profile->about }}</textarea>
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update Profile</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection