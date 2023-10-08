@extends('layouts.app')

@section('main')
     <h1>This is products Views</h1>

    @foreach ($product as $product  )
        <h3>{{$product->name}}</h3>
    @endforeach
@endsection