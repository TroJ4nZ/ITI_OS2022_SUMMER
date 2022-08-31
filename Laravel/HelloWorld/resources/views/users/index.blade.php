@extends('layouts.app')
@section('title', 'Users Index Page')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Email Verified At</th>
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
                        {{-- Route to edit with parameter $id (in UserController) sent arg $user[['id']] respective 
                        to the edit button row click (which row was clicked?) --}}
                        <a href=" {{ route('users.edit', ['id' => $user['id']]) }}" type="button" class="btn btn-primary">
                            Edit </a>

                        <form method=POST style="display: inline-block;" action="{{ route('users.destroy', ['id' => $user['id']]) }}">
                            @method('DELETE')
                            @csrf

                            <button  type="submit"
                                class="btn btn-danger"> Delete </button>

                        </form>

                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
