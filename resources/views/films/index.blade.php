@extends('layouts.base')

@section('content')

<a href="{{route("films.create")}}"><button type="button" class="btn  btn-warning">add</button></a>
    
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
      <td class="font-weight-bold">
          {{$film->title}}
        <div class="mt-3 mb-3">
          <a href="{{route("films.show", $film->id)}}"><button type="button" class="btn btn-primary">Select</button></a>
          <a href="{{route("films.edit", $film->id)}}"><button type="button" class="btn btn btn-info">Edit</button></a>
          <form action="{{route("films.destroy", $film->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-danger m-4">Delete</button>
          </form>
        </div>
      </td>
      <td>{{$film->description}}</td>
      <td><img class="max-width:20%" src="{{$film->thumb}}" alt="{{$film->title}}"></td>
      <td>{{$film->price}}</td>
      <td>{{$film->series}}</td>
      <td class="text-nowrap">{{$film->sale_date}}</td>
      <td>{{$film->type}}</td>
    </tr>
    @endforeach
@endsection

  </tbody>
</table>