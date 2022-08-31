@extends('layouts.app')
@section('title', 'Users Index Page')

@section('content')
    @parent
    <form method=POST action="{{ route('users.update', ['id' => $user['id']]) }}">
        @method('PUT')
        @csrf
        <label>Editing user with id {{$user["id"]}}</label>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name=email aria-describedby="emailHelp" value="{{$user['email']}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name=name value="{{$user['name']}}">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <a href=>
        <button type="submit" class="btn btn-primary">Submit</button>
      </a>
      </form>
@endsection