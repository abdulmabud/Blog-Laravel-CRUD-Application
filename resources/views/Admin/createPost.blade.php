@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')
  <div class="row">
      <div class="col-6 offset-3 mt-5">
         <h3 class="text text-center text-success">Create Post</h3>
      <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="form-groups">
      @csrf

      <label for="title" class="form-control">Title</label>
      <input type="text" name="title" class="form-control">

      

      <label for="author" class="form-control mt-3">Author</label>
      <input type="text" name="author" class="form-control">

      <label for="description" class="form-control mt-3">Description</label>
      <input type="text" name="description" class="form-control">
      

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
        <option value="1">Published</option>
        <option value="0">Unpublished</option>
      </select>
      

      <input type="submit" value="Create Post" class="btn btn-success btn-block my-3">
      </form>
      </div>
  </div>
@endsection
