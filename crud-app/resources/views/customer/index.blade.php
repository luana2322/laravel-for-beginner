   @extends('layouts.app')

    @section('main')
    <h1>This is Customer View</h1>
    <a  class="btn btn-primary" href="customer/create">Create customer</a>
        @foreach ($customers as $item)
            <div class="card-group">
  <div class="card">
    <div class="card-body">
      <a href="customer/{{$item->id}}" class="card-title">{{$item->id}}</a><br>
      <img src="{{asset('images/'.$item->image_path)}}" alt=""><br>
      <a href="customer/{{$item->id}}" class="card-text"><small class="text-muted">{{$item->name}}</small></a>
      <p class="card-text"><small class="text-muted">{{$item->address}}</small></p>
      <p class="card-text"><small class="text-muted">{{$item->email}}</small></p>
      <p class="card-text"><small class="text-muted">{{$item->phone}}</small></p>
      <p class="card-text"><small class="text-muted">{{$item->age}}</small></p>
      <a class="btn btn-primary"  href="/customer/{{$item->id}}/edit">Update customer</a>
      <form action="/customer/{{$item->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>
</div>
        @endforeach
    @endsection
