@extends('layouts.base')

@section('content')
<h1 class="text-center">update:{{$film->name}}</h1>
<form action="{{route("films.update", $film->id)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group col-md-12">
    <label for="title">title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="add title" value="{{old("title")??$film->title}}">
    @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-12">
    <label for="description">Description</label>
    <textarea rows="5" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="add a description" >{{$film->description}}</textarea>
    @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-6">
    <label for="thumb">Image</label>
    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="add the image link here" value="{{old("thumb")??$film->thumb}}"> 
    @error('thumb')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-12">
    <label for="price">Price</label>
    <input type="number" min=0 class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="add the price here" value="{{old("price")??$film->price}}">
    @error('number')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-2">
    <label for="series">Series</label>
    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old("series")??$film->series}}">
    @error('series')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-2">
    <label for="sale_date">Choose sale date</label>
    <input type="date" id="sale_date" name="sale_date" class="@error('sale_date') is-invalid @enderror"
    value="{{old("series")??$film->sale_date}}"
        min="1990-01-01" max="2024-12-31">
    @error('sale_date')
      <div class="alert alert-danger" >{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-2">
    <label class="my-1 mr-2" for="type">type</label>
    <select class="custom-select my-1 mr-sm-2" id="type" name="type">
      <option selected>Choose...</option>
      <option value="comic book" {{((old("type")??$film->type) == "comic book")? "selected": ""}}>comic book</option>
      <option value="graphic novel" {{((old("type")??$film->type) == "graphic novel")? "selected": ""}}>graphic novel</option>
    </select>
    @error('type')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>

 
@endsection

 