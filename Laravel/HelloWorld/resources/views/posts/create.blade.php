@extends('layouts.main')
@section('title', 'New Post')

@section('content')
    @parent
    <div class="container">
    <form method=POST action={{ route('posts.store') }} enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the post title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea type="textarea" class="form-control" id="body" name="body" cols=25 rows=5
                placeholder="Enter the post body"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image"></input>

        </div>
        <button type="submit" class="btn btn-primary text-dark">Submit</button>
    </form>
    </div>
@endsection
