@extends('layouts.app')

@section('main')

<form action="/category/{{$category->id}}" method="post">
    @method('PUT')
    @csrf

     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="text" name="name" readonly value="{{$category->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" value="{{$category->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descreption</label>
    <input type="text" name="description" value="{{$category->description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
