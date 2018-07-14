@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Edit {{ $tag->name }} tag</div>

        <div class="card-body">
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Tag Name</label>
                    <input type="text" name="name" value="{{ $tag->name }}" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update tag</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection