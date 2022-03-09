@extends('layouts.base')

@section('content')
<h1 class="text-center">{{$film->title}}</h1>
<div class="col-4 m-auto d-flex justify-content-center">
  <img class="m-auto" src="{{$film->thumb}}" alt="{{$film->title}}">
</div>
<h5 class="mt-3 mb-3">{{$film->description}}</h5>
<h5 class="mt-3 mb-3">price:{{$film->price}}</h5>
<h5 class="mt-3 mb-3">series:{{$film->series}}</h5>
<h5 class="mt-3 mb-3">sale date:{{$film->sale_date}}</h5>
<h5 class="mt-3 mb-3">type:{{$film->type}}</h5>

<a href="{{route("films.index")}}"><button type="button" class="btn btn-primary">back</button></a>
    

 
@endsection

 