@extends('layouts.main')
@section('title', 'Post Page')

@section('content')
    <div class='container'>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Post Owner</th>
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
                <td>
                    {{ $post->user()->get('name')->value('name') }}
                </td>
                <td style="min-width:150px;">
                    <a href=" {{ route('posts.edit', ['post' => $post['id']]) }}" type="button" class="btn text-dark btn-primary">
                        Edit </a>

                    <form method=POST style="display: inline-block;"
                        action="{{ route('posts.destroy', ['id' => $post['id']]) }}">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="btn text-dark btn-danger"> Delete </button>

                    </form>

                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
