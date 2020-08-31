@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="card">
        <div class="card-body">
            <div class="">
                <span class="h1">Users Table</span>
                <a href="{{ route('user.create') }}" class="btn btn-success btn-lg float-right">Add user</a>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                    <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
