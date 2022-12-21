@extends('admin.app')
@section('title', 'Danh sách vai trò')
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
                                        <h1>Danh sách vai trò</h1>
                                        <div class="lead">
                                            Quản lí vai trò.
                                            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Thêm mới</a>
                                        </div>

                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>

                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="1%">STT</th>
                                                <th>Tên vai trò</th>
                                                <th width="3%" colspan="3">Thao tác</th>
                                            </tr>
                                            @foreach ($roles as $key => $role)
                                                <tr>
                                                    <td>{{ $role->id }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        <a class="btn btn-info btn-sm" href="{{ route('admin.roles.show', $role->id) }}" title="Xem chi tiết">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role->id) }}" title="Sửa"><i class="fas fa-edit"></i></a>
                                                    </td>
                                                    <td>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                        <button class="btn btn-danger btn-sm" title="Xóa"><i class="fas fa-trash"></i></button>
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
