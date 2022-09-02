@extends('layouts.app')
@section('title', 'Posts Listing')


@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert" style="text-align: center;">
            {{session('success')}}
        </div>
    @endif
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
            @foreach ($posts as $post)

                    <tr>
                        <td>
                            {{ $post['id'] }}
                        </td>
                        <td>
                            {{ $post['title'] }}
                        </td>
                        <td>
                            @if (Str::length($post['body']) > 100)
                                {{ Str::substr($post['body'], 0, 100) }}{{ '...' }}
                            @else
                                {{ $post['body'] }}
                            @endif
                        </td>
                        <td>
                            {{-- Route to edit with parameter $id (in UserController) sent arg $user[['id']] respective
                        to the edit button row click (which row was clicked?) --}}
                            <a href=" {{ route('posts.show', ['id' => $post['id']]) }}" type="button" class="btn btn-info">
                                View </a>
                            <a href=" {{ route('posts.edit', ['post' => $post['id']]) }}" type="button"
                                class="btn btn-primary">
                                Edit </a>

                            <form method=POST style="display: inline-block;"
                                action="{{ route('posts.destroy', ['id' => $post['id']]) }}">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-danger"> Delete </button>

                            </form>

                        </td>
                    </tr>

            @endforeach
        </tbody>
    </table>

    {{-- Pagination with links and pages (UseBootstrapFive) --}}
    {{ $posts->links() }}
@endsection
