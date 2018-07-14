@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Edit your profile</div>

        <div class="card-body">
            <form action="{{ route('user.profile.update', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="avatar">Upload new avatar</label>
                    <input type="file" name="avatar" id="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook profile</label>
                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $user->profile->facebook }}">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube profile</label>
                    <input type="text" name="youtube" id="youtube" class="form-control" value="{{ $user->profile->youtube }}">
                </div> 
                <div class="form-group">
                    <label for="about">About you</label>
                    <textarea class="form-control" name="about" id="about" cols="30" rows="10">{{ $user->profile->about }}</textarea>
                </div> 
                <div class="form-group">
                    <div class="text-center">
                    <button class="btn btn-success" type="submit">Add User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection