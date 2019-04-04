@extends('layouts.app')

@section('title')
    Category
@endsection

@section('content')

@include('inc.message')


<table class="table table-bordered">

  <thead>

    <tr>

      <th>Category Id</th>
      <th>Category Name</th>
      <th>Category Status</th>
      
      

    </tr>

  </thead>
<tbody>
@foreach ($categories as $category)
<tr>

    <td>{{ $category->id }}</td>
    <td>{{ $category->name }}</td>
    <td>{{ $category->status == 1? "Published" : "Unpublished"
    }}</td>
    
  </tr>
@endforeach
  
</tbody>

</table>
 
@endsection
