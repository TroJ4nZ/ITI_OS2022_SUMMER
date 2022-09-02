@extends('layouts.main')
@section('title', 'Users Index Page')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Email Verified At</th>
                <th scope="col">Post Count</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user['id'] }}
                    </td>
                    <td>
                        {{ $user['name'] }}
                    </td>
                    <td>
                        {{ $user['email'] }}
                    </td>
                    <td>
                        {{ $user['email_verified_at'] }}
                    </td>
                    <td>
                        {{ $user->posts()->count() }}
                    </td>
                    <td>
                        {{-- Route to edit with parameter $id (in UserController) sent arg $user[['id']] respective
                        to the edit button row click (which row was clicked?) --}}
                        <a href=" {{ route('users.show', ['id' => $user['id']]) }}" type="button" class="btn btn-info">
                            View </a>
                        <a href=" {{ route('users.edit', ['id' => $user['id']]) }}" type="button" class="btn btn-primary text-dark">
                            Edit </a>

                        <form method=POST style="display: inline-block;" action="{{ route('users.destroy', ['id' => $user['id']]) }}">
                            @method('DELETE')
                            @csrf

                            <button  type="submit"
                                class="btn btn-danger text-dark"> Delete </button>

                        </form>

                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    </div>
    {{ $users->links() }}

@endsection
