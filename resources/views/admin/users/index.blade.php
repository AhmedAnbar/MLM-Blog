@extends('layouts.app')

@section('title')
    - Users
@endsection

@section('content')
<div class="card">
        <div class="card-header">Users</div>
        <div class="card-body">
                <a href="{{ route('user.create') }}" class="btn btn-success btn-sm" style="margin-bottom: 1rem;">New User</a>
                <table class="table table-hover" id="categoriesTable">
                        <thead>
                            <tr>
                                <th class="text-center">Image</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Permission</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="align-middle text-center"><img style="width:60px; height:60px; border-radius: 50%;"  src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}"></td>
                                <td class="align-middle text-center"><a href="#">{{ $user->name }}</a></td>
                                <td class="align-middle text-center">
                                    @if ($user->admin)
                                    <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Remove permissions</a>
                                    @else
                                        <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Make admin</a>
                                    @endif
                                </td>
                                <td class="align-middle text-center">
                                    @if (Auth::id() !== $user->id)
                                    <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
@endsection
