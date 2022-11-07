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
                                        <h1>Roles</h1>
                                        <div class="lead">
                                            Manage your roles here.
                                            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm float-right">Add role</a>
                                        </div>

                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>

                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="1%">No</th>
                                                <th>Name</th>
                                                <th width="3%" colspan="3">Action</th>
                                            </tr>
                                            @foreach ($roles as $key => $role)
                                                <tr>
                                                    <td>{{ $role->id }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        <a class="btn btn-info btn-sm" href="{{ route('admin.roles.show', $role->id) }}">Show</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role->id) }}">Edit</a>
                                                    </td>
                                                    <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>

                                        <div class="d-flex">
                                            {!! $roles->links() !!}
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
