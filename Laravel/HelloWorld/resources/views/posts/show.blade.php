@extends('layouts.app')
@section('title', 'Post Page')

@section('content')
    @parent
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{ $post['id'] }}
                </td>
                <td>
                    {{ $post['title'] }}
                </td>
                <td>
                    {{ $post['body'] }}
                </td>

                <td style="min-width:250px;">
                    <a href=" {{ route('posts.edit', ['post' => $post['id']]) }}" type="button" class="btn btn-primary">
                        Edit </a>

                    <form method=POST style="display: inline-block;"
                        action="{{ route('posts.destroy', ['id' => $post['id']]) }}">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn btn-danger"> Delete </button>

                    </form>

                </td>
            </tr>
        </tbody>
    </table>
@endsection
