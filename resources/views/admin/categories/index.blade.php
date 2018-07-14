@extends('layouts.app')

@section('title')
    - Categories
@endsection

@section('content')
<div class="card">
        <div class="card-header">Categories</div>
        <div class="card-body">
                <a href="{{ route('category.create') }}" class="btn btn-success btn-sm" style="margin-bottom: 1rem;">Create Category</a>
                <table class="table table-hover" id="categoriesTable">
                        <thead>
                            <tr>
                                <th>Category name</th>
                                <th class="text-center">Editing</th>
                                <th class="text-center">Deleting</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($categories) > 0)
                            @foreach($categories as $category)
                            <tr>
                                <td class="align-middle"><a href="#">{{ $category->name }}</a></td>
                                <td class="align-middle text-center"><a href="{{ route('category.edit', ['id' => $category->id]) }}"><i class="fa fa-edit"></i></a></td>
                                <td class="align-middle text-center"><a href="{{ route('category.delete', ['id' => $category->id]) }}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="3">No categories in database to show.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>
@endsection

