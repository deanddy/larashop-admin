@extends('layouts.global')

@section('title') Edit Category @endsection 

@section('content')
<div class="col-md-8">
  <h3>Form Edit Category</h3>

  @if(session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
  @endif 

  @if($errors->first())
    <div class="alert alert-danger">
      Error, silahkan periksa kembali data anda
    </div>
  @endif

    <form 
      action="{{route('categories.update', [$category->id])}}"
      enctype="multipart/form-data"
      method="POST"
      class="bg-white shadow-sm p-3"
      >

      @csrf 

      <input 
        type="hidden" 
        value="PUT" 
        name="_method">

      <label>Category name</label><br>
      <input 
        type="text" 
        class="form-control {{$errors->first('name') ? "is-invalid" : ""}}"
        name="name" 
        value="{{old('name') ? old('name') : $category->name}}">
      <div class="invalid-feedback">
        {{$errors->first('name')}}
      </div>
      <br>

      <label for="">Category slug</label>
      <input 
        type="text"
        class="form-control {{$errors->first('slug') ? "is-invalid" : ""}}"
        value="{{old('slug') ? old('slug') : $category->slug}}"
        name="slug">
      <div class="invalid-feedback">
        {{$errors->first('slug')}}
      </div>
      <br><br>

      <label for="">Category image</label><br>
      @if($category->image)
        <span>Current image</span><br>
        <img src="{{asset('storage/'.$category->image)}}" width="120px">
        <br><br>
      @endif

      <input 
        type="file"
        class="form-control {{$errors->first('image') ? "is-invalid" : ""}}"
        name="image">
      <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar </small>
      <div class="invalid-feedback">
        {{$errors->first('image')}}
      </div>
      <br><br>
      
      <input 
      class="btn btn-primary" 
      type="submit" 
      value="Save"/>
    

    </form>
  </div>
</div>
@endsection 