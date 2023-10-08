@extends('layouts.app')

@section('main')

<div class="card" style="width: 28rem;">
  <div class="card-body">
    
    <h5 class="card-title">Customer id:{{$customers->id}}</h5>
    <p class="card-text">Customer name:{{$customers->name}}</p>
    <p class="card-text">Customer Address:{{$customers->address}}</p>
    <p class="card-text">Customer Email:{{$customers->email}}</p>
    <p class="card-text">Customer Age:{{$customers->age}}</p>
    <p class="card-text">Customer Phone Number:{{$customers->phone}}</p>
    <p class="card-text">Customer Created At:{{$customers->created_at}}</p>
    <p class="card-text">Customer Deleted At:{{$customers->updated_at}}</p>
    <p class="card-text">Category Name:{{$category->name}}</p>
    
  </div>
</div>

@endsection