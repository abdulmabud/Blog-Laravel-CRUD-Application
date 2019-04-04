@extends('layouts.app')
@section('title')
    Category Details
@endsection

@section('content')
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Category Id</th>
                <th>{{ $category->id }}</th>
            </tr>
    
            <tr>
                    <th>Category Name</th>
                    <th>{{ $category->name }}</th>
            </tr>
    
            <tr>
                        <th>Category Status</th>
                        <th>{{ $Category->status }}</th>
            </tr>
    
           
        </thead>
    </table> 

    <hr>

    <a name="" id="" class="btn btn-primary btn-block mb-3" href="{{ route('posts.edit', $post->id) }}" role="button">Edit Post</a>
    
    <form action="{{ route('posts.delete', $post->id) }}" method="POST">

        @csrf
        @method('DELETE')
        <input type="submit" value="Delete Post" class="btn btn-danger btn-block mb-5">
    </form>

@endsection