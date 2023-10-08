@extends('layouts.app')

@section('main')

<form action="/customer/{{$customer->id}}" method="post">

@csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" value="{{$customer->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" name="address" value="{{$customer->address}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" value="{{$customer->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="text" name="phone" value="{{$customer->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input type="text" name="age" value="{{$customer->age}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
    <select name="categories" >
     @foreach ($categorylist as $item)
     <option value="{{$item->id}}"
      @if ($item->id===$customer->category_id)
          @selected(true)
      @endif
      >{{$item->name}}</option>
@endforeach
  
  </select>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
