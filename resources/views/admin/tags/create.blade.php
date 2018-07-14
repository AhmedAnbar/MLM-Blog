@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Create new tag<a href="{{ route('tags') }}" class="btn btn-secondary btn-sm float-right">Back</a></div>
        <div class="card-body">
            <form action="{{ route('tag.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Tag Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store tag</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection