@extends('layouts.app')

@section('main')
<a href="category/create" class="btn btn-primary">Add new category</a>
@foreach($category as $category)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$category->id}}</h5>
    <p class="card-text">{{$category->description}}</p>
    <p class="card-text">{{$category->created_at}}</p>
    <p class="card-text">{{$category->updated_at}}</p>
    <a href="/category/{{$category->id}}/edit" class="btn btn-primary">Update</a>
  <form action="/category/{{$category->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
  </div>
</div>
@endforeach
@endsection
