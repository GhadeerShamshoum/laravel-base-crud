@extends('layouts.base')

@section('content')
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Thumb</th>
      <th scope="col">Price</th>
      <th scope="col">Series</th>
      <th scope="col">Sale Date</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    @foreach($films as $film)
    <tr>
      <th scope="row">{{$film->id}}</th>
      <td>{{$film->title}}</td>
      <td>{{$film->description}}</td>
      <td><img src="{{$film->thumb}}" alt=""></td>
      <td>{{$film->price}}</td>
      <td>{{$film->series}}</td>
      <td>{{$film->sale_date}}</td>
      <td>{{$film->type}}</td>
    </tr>
    @endforeach
@endsection

  </tbody>
</table>