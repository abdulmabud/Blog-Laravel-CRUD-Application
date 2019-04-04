@extends('layouts.app')

@section('title')
    Edit Category
@endsection

@section('content')
  <div class="row">
      <div class="col-6 offset-3 mt-5">
         <h3 class="text text-center text-success">Create Post</h3>
      <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="form-groups">
      @csrf
      @method('PUT')

      <label for="title" class="form-control">Category Name</label>
      <input type="text" name="title" value="{{ $category->name }}" class="form-control">

      <label for="author" class="form-control mt-3">Category Stauts</label>
      <select name="status" id="">
          <option value="{{ $category->status }}">{{ $category->status == 1 ? "Published" : "UnPublished" }}</option>
      </select>

      
      

      <input type="submit" value="Update Post" class="btn btn-success btn-block mt-3">
      </form>
      </div>
  </div>
@endsection
