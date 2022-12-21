@extends('admin.app')
@section('title', 'Thông tin chi tiết vai trò')
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
                                        <h1>{{ ucfirst($role->name) }} Role</h1>
                                        <div class="lead">

                                        </div>

                                        <div class="container mt-4">

                                            <h3>Assigned permissions</h3>

                                            <table class="table table-striped">
                                                <thead>
                                                <th scope="col" width="20%">Name</th>
                                                <th scope="col" width="1%">Guard</th>
                                                </thead>

                                                @foreach($rolePermissions as $permission)
                                                    <tr>
                                                        <td>{{ $permission->name }}</td>
                                                        <td>{{ $permission->guard_name }}</td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>

                                    </div>
                                    <div class="mt-4">
                                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('admin.roles.index') }}" class="btn btn-default">Back</a>
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
