@extends('layouts.main')
@section('title', 'Deleted Posts')


@section('content')
<div class="container">
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
                {{-- @if (isset($post['deleted_at'])) --}}
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
                        <form action=" {{ route('posts.restore', ['id' => $post['id']]) }}" method=POST>
                            @method('PATCH')
                            @csrf
                        {{-- Route to edit with parameter $id (in UserController) sent arg $user[['id']] respective
                        to the edit button row click (which row was clicked?) --}}
                        <button type="submit" class="btn text-dark btn-success">
                            Restore </a>

                        </form>

                    </td>
                </tr>
                {{-- @endif --}}

            @endforeach
        </tbody>
    </table>

    {{-- Pagination with links and pages (UseBootstrapFive) --}}
</div>
{{ $posts->links() }}

@endsection
