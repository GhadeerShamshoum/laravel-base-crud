@extends('layouts.base')

@section('content')
<h1 class="text-center">add Comic </h1>
<form action="{{route("films.store")}}" method="POST">
  @csrf
  <div class="form-group col-md-12">
    <label for="title">title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="add title">
  </div>
  <div class="form-group col-md-12">
    <label for="description">Description</label>
    <textarea rows="5" class="form-control" id="description" name="description" placeholder="add a description"></textarea>
  </div>
  <div class="form-group col-md-6">
    <label for="description">Image</label>
    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="add the image link here">
  </div>
  <div class="form-group col-md-12">
    <label for="price">Price</label>
    <input type="number" min=0 class="form-control" id="price" name="price" placeholder="add the price here">
  </div>
  <div class="form-group col-md-2">
    <label for="series">Series</label>
    <input type="text" class="form-control" id="series" name="series">
  </div>
  <div class="form-group col-md-2">
    <label for="sale_date">Choose sale date</label>
    <input type="date" id="sale_date" name="sale_date"
        value="2022-03-10"
        min="1990-01-01" max="2024-12-31">
  </div>
  <div class="form-group col-md-2">
    <label class="my-1 mr-2" for="type">type</label>
    <select class="custom-select my-1 mr-sm-2" id="type" name="type">
      <option selected>Choose...</option>
      <option value="comic book">comic book</option>
      <option value="graphic novel">graphic novel</option>
    </select>
</div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>

 
@endsection

 