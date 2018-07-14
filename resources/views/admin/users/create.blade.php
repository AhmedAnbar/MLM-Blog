@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Create new user</div>

        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" id="email" class="form-control">
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