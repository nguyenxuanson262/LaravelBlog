@extends('admin.app')
@section('title', 'Danh sách người dùng')
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
                                        <h1>Danh sách người dùng</h1>
                                        <div class="lead">
                                            Quản lí danh sách người dùng
                                            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm float-right">Thêm mới</a>
                                        </div>

                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>

                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col" width="1%">STT</th>
                                                <th scope="col" width="15%">Tên</th>
                                                <th scope="col">Email</th>
                                                <th scope="col" width="10%">Vai trò</th>
                                                <th scope="col" width="1%" colspan="3">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @foreach($user->roles as $role)
                                                            <span class="badge bg-primary">{{ $role->name }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td><a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-warning btn-sm">Xem</a></td>
                                                    <td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-sm">Sửa</a></td>
                                                    <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Xóa', ['class' => 'btn btn-danger btn-sm']) !!}
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
