@extends('layouts.app')

@section('title')
    Create Category
@endsection

@section('content')
  <div class="row">
      <div class="col-6 offset-3 mt-5">
         <h3 class="text text-center text-success">Create Post</h3>
      <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" class="form-groups">
      @csrf

      <label for="name" class="form-control">Title</label>
      <input type="text" name="name" class="form-control">

      <select name="status" class="form-control mt-2">
          <option value="1">Published</option>
          <option value="0">UnPublished</option>
    </select>


      <input type="submit" value="Create Post" class="btn btn-success btn-block my-3">
      </form>
      </div>
  </div>
@endsection
