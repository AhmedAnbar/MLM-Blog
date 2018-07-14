@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Edit {{ $category->name }} category</div>

        <div class="card-body">
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">    
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Edit category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection