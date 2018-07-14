@extends('layouts.app')

@section('title')
    - Posts
@endsection

@section('content')
<div class="card">
        <div class="card-header">Published Posts</div>
        <div class="card-body">
                <a href="{{ route('post.create') }}" class="btn btn-success btn-sm" style="margin-bottom: 1rem;">Create Post</a>
                <a href="{{ route('posts.trashed') }}" class="btn btn-warning btn-sm" style="margin-bottom: 1rem;">Trashed Posts</a>
                <table class="table table-hover" id="categoriesTable">
                        <thead>
                            <tr>
                                <th class="text-center">Image</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Trash</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                            @foreach($posts as $post)
                            <tr>
                                <td class="align-middle text-center"><img style="width:100px; height:50px;" class="img-thumbnail" src="{{ asset($post->featured) }}" alt="{{ $post->title }}"></td>
                                <td class="align-middle text-center"><a href="#">{{ $post->title }}</a></td>
                                <td class="align-middle text-center"><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-primary btn-sm">Edit</a></td>
                                <td class="align-middle text-center"><a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-warning btn-sm">Trash</a></td>
                            </tr>
                            @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="4">No posts in database to show.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>
@endsection
