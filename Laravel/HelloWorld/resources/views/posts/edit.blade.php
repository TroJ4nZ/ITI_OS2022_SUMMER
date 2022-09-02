@extends('layouts.main')
@section('title', 'Edit Post')

@section('content')
    @parent
    <form method="POST" action="{{route('posts.update', ['id' => $post["id"]])}}">
        @method("PUT")
        @csrf
        <label>Editing post with id {{$post["id"]}}</label>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value={{$post["title"]}}>
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea type="textarea" class="form-control" id="body" name="body" cols=25 rows=5>{{$post["body"]}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
