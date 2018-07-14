@extends('layouts.app')

@section('title')
    - Tags
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('DataTables/ColReorder-1.5.0/css/colReorder.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{  asset('DataTables/Buttons-1.5.1/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="card">
        <div class="card-header">Tags</div>
        <div class="card-body">
            <a href="{{ route('tag.create') }}" class="btn btn-success btn-sm" style="margin-bottom: 1rem;">Create Tag</a>
                <table class="table table-hover" id="tagsTable">
                        <thead>
                            <tr>
                                <th>Tag name</th>
                                <th class="text-center">Editing</th>
                                <th class="text-center">Deleting</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($tags) > 0)
                            @foreach($tags as $tag)
                            <tr>
                                <td class="align-middle"><a href="#">{{ $tag->name }}</a></td>
                                <td class="align-middle text-center"><a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-primary btn-sm">Edit</a></td>
                                <td class="align-middle text-center"><a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                            @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="3">No tags in database to show.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>
@endsection

