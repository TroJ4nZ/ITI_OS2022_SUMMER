@extends('layouts.main')
@section('title', 'User Page')

@section('content')
    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Email Verified At</th>
                    <th scope="col">List of Post Titles</th>

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
                    <td>
                        <table class="table table-borderless">
                            @foreach ($user->posts()->get() as $post)
                                <tr>
                                    <td>
                                        {{ $post['title'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
