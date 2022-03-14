@extends('layouts.base')

@section('content')
<h1 class="text-center">update:{{$film->name}}</h1>
<form action="{{route("films.update", $film->id)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group col-md-12">
    <label for="title">title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="add title" value="{{$film->title}}">
  </div>
  <div class="form-group col-md-12">
    <label for="description">Description</label>
    <textarea rows="5" class="form-control" id="description" name="description" placeholder="add a description">{{$film->description}}</textarea>
  </div>
  <div class="form-group col-md-6">
    <label for="description">Image</label>
    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="add the image link here" value="{{$film->thumb}}">
  </div>
  <div class="form-group col-md-12">
    <label for="price">Price</label>
    <input type="number" min=0 class="form-control" id="price" name="price" placeholder="add the price here" value="{{$film->price}}">
  </div>
  <div class="form-group col-md-2">
    <label for="series">Series</label>
    <input type="text" class="form-control" id="series" name="series" value="{{$film->series}}">
  </div>
  <div class="form-group col-md-2">
    <label for="sale_date">Choose sale date</label>
    <input type="date" id="sale_date" name="sale_date" value="{{$film->sale_date}}"
        min="1990-01-01" max="2024-12-31">
  </div>
  <div class="form-group col-md-2">
    <label class="my-1 mr-2" for="type">type</label>
    <select class="custom-select my-1 mr-sm-2" id="type" name="type">
      <option selected>Choose...</option>
      <option value="comic book" {{$film->type =="comic book"? "selected": ""}}>comic book</option>
      <option value="graphic novel" {{$film->type =="graphic novel"? "selected": ""}}>graphic novel</option>
    </select>
</div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>

 
@endsection

 