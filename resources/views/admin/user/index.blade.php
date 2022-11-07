@extends('admin.app')
@section('title', 'dashboard')
@section('content')
    <div class="dash">
        @include('admin.dash-nav-dark')
        <div class="dash-app">
            @include('admin.dash-toolbar')
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bg-light p-4 rounded">
                                        <h1>Users</h1>
                                        <div class="lead">
                                            Manage your users here.
                                            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a>
                                        </div>

                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>

                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col" width="1%">No</th>
                                                <th scope="col" width="15%">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col" width="10%">Username</th>
                                                <th scope="col" width="10%">Roles</th>
                                                <th scope="col" width="1%" colspan="3"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>
                                                        @foreach($user->roles as $role)
                                                            <span class="badge bg-primary">{{ $role->name }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td><a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                                                    <td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                                                    <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                        <div class="d-flex">
                                            {!! $users->links() !!}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
