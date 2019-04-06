@extends('layouts.app')

@section('content')


<table class="table table-bordered">

  <thead>

    <tr>

      <th>Post Id</th>
      <th>Post Title</th>
      <th>Post Author</th>
      <th>Post Description</th>
      <th></th>
      <th></th>
      <th>Action</th>
      

    </tr>

  </thead>
<tbody>
@foreach ($posts as $post)
<tr>

    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->author }}</td>
    <td>{!! str_limit($post->description, 50, '....')   !!} </td>
    <td>{{ $post->category->name }}</td>
    <td>{{ $post->status == 1 ? 'Published' : 'Unpublished' }}</td>
    <td><a name="" id="" class="btn btn-primary" href="{{ route('posts.show', $post->id) }}" role="button">Details</a></td>
  </tr>
@endforeach
  
</tbody>

</table>
 
@endsection
