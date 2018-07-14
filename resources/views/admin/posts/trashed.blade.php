@extends('layouts.app')

@section('title')
    - Trashed Posts
@endsection



@section('content')
<div class="card">
        <div class="card-header">Trashed Posts <a href="{{ route('posts') }}" class="btn btn-secondary btn-sm float-right">Back</a></div>
        <div class="card-body">
                <table class="table table-hover" id="categoriesTable">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th class="text-center">Restore</th>
                                <th class="text-center">Deleted Time</th>
                                <th class="text-center">Destroy</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                            @foreach($posts as $post)
                            <tr>
                                <td class="align-middle text-center"><img style="width:100px; height:50px;" class="img-thumbnail" src="{{ $post->featured }}" alt="{{ $post->title }}"></td>
                                <td class="align-middle">{{ $post->title }}</td>
                                <td class="align-middle"><a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-success btn-sm">Restore</a></td>
                                <td class="align-middle text-center">{{ $post->deleted_at }}</td>
                                <td class="align-middle text-center"><a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="5">No trashed posts in database to show</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>
@endsection

