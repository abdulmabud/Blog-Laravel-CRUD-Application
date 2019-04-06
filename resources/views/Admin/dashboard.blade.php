@extends('layouts.app');

@section('title')
    Admin Panel
@endsection

@section('content')
<h2 class="mt-3 text-center text-primary">Admin Panel</h2> <br>
<div class="row">
    <div class="col-sm-6">
        <button class="btn btn-primary btn-block"><a class="text-light btn btn-block" href="{{ route('posts.index') }}">All Post</a></button> <br>

        <button class="btn btn-primary btn-block"><a class="text-light btn btn-block" href="{{ route('posts.indexAdmin') }}">My Post (Current Admin Post)</a></button> <br>

        <button class="btn btn-primary btn-block"><a class="text-light btn btn-block" href="{{ route('posts.create') }}">Create Post</a></button> <br>

        <button class="btn btn-primary btn-block"><a class="text-light btn btn-block" href="{{ route('categories.index') }}">All Category</a></button> <br>

        <button class="btn btn-primary btn-block"><a class="text-light btn btn-block" href="{{ route('categories.create') }}">Create Category</a></button> <br>

    </div>  
    <div class="col-sm-6">
        <img src="{{ asset('images/Mabud.jpg') }}" height="278" class="mb-5" alt="">    
    </div>  
</div>

    
@endsection
