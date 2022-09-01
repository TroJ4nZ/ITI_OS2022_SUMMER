@extends('layouts.app')
@section('title', 'User Page')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
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
            </tr>

        </tbody>
    </table>
@endsection
