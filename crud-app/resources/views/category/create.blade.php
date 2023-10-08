@extends('layouts.app')

@section('main')

<form action="/category" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descreption</label>
    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
