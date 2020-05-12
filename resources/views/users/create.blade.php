@extends('layouts.global')

@section('title')
  Create User
@endsection

@section('content')

<div class="col-md-8">

  @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
  @endif

  <form ecntype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
    <br>

    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="username">
    <br>

    <label for="">Roles</label>
    <br>
    <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
    <label for="ADMIN">Administrator</label>
    
    <input type="checkbox" name="roles[]" id="STAFF" value="STAFF">
    <label for="STAFF">Staff</label>

    <input type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER">
    <label for="CUSTOMER">Customer</label>
    <br>

    <br>
    <label for="phone">Phone number</label>
    <br>
    <input type="text" name="phone" class="form-control">

    <br>
    <label for="address">Address</label>
    <textarea name="address" id="address" class="form-control"></textarea>

    <br>
    <label for="avatar">Avatar image</label>
    <br>
    <input type="file" name="avatar" id="avatar" class="form-control">

    <hr class="my-3">

    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" placeholder="user@email.com"/>
    <br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="password" class="form-control">

    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="password confirmation"/>
    <br>

    <input type="submit" class="btn btn-primary" value="Save"/>

  </form>
</div>
@endsection