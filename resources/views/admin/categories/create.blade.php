@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Create new category <a href="{{ route('categories') }}" class="btn btn-secondary btn-sm float-right">Back</a></div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection