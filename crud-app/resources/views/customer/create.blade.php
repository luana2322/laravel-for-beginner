@extends('layouts.app')

@section('main')

<form action="/customer" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="file" name="image"    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input type="text" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <select name="categories" >
     @foreach ($categorylist as $item)
     <option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
  
  </select>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
