@extends('layouts.app')

@section('style')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('content')
<div class="card">
        <div class="card-header">Create new post<a href="{{ route('posts') }}" class="btn btn-secondary btn-sm float-right">Back</a></div>
        <div class="card-body">
                
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
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
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Choose Tag(s)</label>
                    @foreach ($tags as $tag)
                        <div class="checkbox">
                            <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                    @endforeach

                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    $(document).ready(function(){
             if (window.jQuery) {  
               // jQuery is loaded  
               alert("Yeah!");
             } else {
               // jQuery is not loaded
               alert("Doesn't Work");
             }
          });
    
    
</script>
@endsection