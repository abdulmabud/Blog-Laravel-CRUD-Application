@extends('layouts.app')

@section('content')
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Post Id</th>
                <th>{{ $post->id }}</th>
            </tr>
    
            <tr>
                    <th>Post Title</th>
                    <th>{{ $post->title }}</th>
            </tr>
    
            <tr>
                        <th>Post Author</th>
                        <th>{{ $post->author }}</th>
            </tr>
    
            <tr>
                    <th>Post Description</th>
                    <th>{{ $post->description }}</th>
             </tr>

             <tr>
                    <th>Post Image</th>
                    <th><img src="{{ asset('images/'.$post->imgPath) }}" width="400px" alt=""></th>
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