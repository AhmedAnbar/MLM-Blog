@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Edit post: {{ $post->title }}</div>

        <div class="card-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Featured image</label><br>
                    <input type="file" name="featured" id="featured" class="btn btn-secondary btn-sm">
                </div>
                <div class="form-group">
                    <label for="category">Choose Category</label>
                    <select name="category_id" id="category" class="form-control">
                            <option value=""></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                                @if ($post->category->id == $category->id)
                                    selected
                                @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                        <label for="tags">Choose Tag(s)</label>
                        @foreach ($tags as $tag)
                            <div class="checkbox">
                                <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                                    @foreach ($post->tags as $t)
                                        @if ($tag->id == $t->id)
                                            checked
                                        @endif
                                    @endforeach    
                                >{{ $tag->name }}</label>
                            </div>
                        @endforeach
    
                    </div>
                
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection