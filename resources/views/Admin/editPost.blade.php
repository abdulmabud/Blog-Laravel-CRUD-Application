@extends('layouts.app')
@section('title')
    Edit Post
@endsection

@section('content')
  <div class="row">
      <div class="col-6 offset-3 mt-5">
         <h3 class="text text-center text-success">Create Post</h3>
      <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="form-groups">
      @csrf
      @method('PUT')

      <label for="title" class="form-control">Title</label>
      <input type="text" name="title" value="{{ $post->title }}" class="form-control">

      <label for="author" class="form-control mt-3">Author</label>
      <input type="text" name="author" value="{{ $post->author }}" class="form-control">

      <label for="description" class="form-control mt-3">Description</label>
      <input type="text" name="description" value="{{ $post->description }}" class="form-control">
      

        <label for="input_image" class="form-control mt-3">Upload Image</label>
      <input type="file" name="input_image" class="form-control">

      <label for="category_id" class="form-control mt-3">Category</label>
      <select name="category_id" class="form-control mt-2">
      @foreach ($categories as $category)
        
        <option value="{{ $category->id }}">{{ $category->name }}</option>  
                 
      @endforeach
    </select> 

      <label for="description" class="form-control mt-3">Status</label>
      <select name="status" id="" class="form-control">
        
        <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>Published</option>
        <option value="0" {{ $post->status == 0 ? 'selected' : '' }}>Unpublished</option>
      </select>
      

      

      <input type="submit" value="Update Post" class="btn btn-success btn-block my-3">
      </form>
      </div>
  </div>
@endsection
