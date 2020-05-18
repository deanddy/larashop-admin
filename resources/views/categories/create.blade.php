@extends('layouts.global')

@section('title')
  Create Category
@endsection

@section('content')
  <h3>Form create category</h3>
  @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
  @endif

  <form action="{{route('categories.store')}}"
      enctype="multipart/form-data"
      class="bg-white shadow-sm p-3"
      method="POST"  
  >
    @csrf

    <label>Category name</label><br>
    <input 
      type="text" 
      class="form-control" 
      name="name">

    <br>

    <label>Category image</label>
    <input 
      type="file" 
      class="form-control"
      name="image">

    <br>

    <input 
      type="submit" 
      class="btn btn-primary" 
      value="Save">

  </form>
  
@endsection