@extends('admin.app')
@section('title', 'Danh sách danh mục')
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
                                        <h1>Danh sách danh mục</h1>
                                        <div class="lead">
                                            Quản lí danh sách danh mục
                                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Thêm mới</a>
                                        </div>
                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">Danh mục cha</th>
                                                <th scope="col">Danh mục</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Thao tác</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->parent_id != null ? $category->parent->name : ""}}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ \App\Models\Category::show[$category->showinhomepage]}}</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category->id) }}" title="Sửa"><i class="fas fa-edit"></i></a>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.categories.delete', $category->id],'style'=>'display:inline']) !!}
                                                        <button class="btn btn-danger btn-sm" title="Xóa"><i class="fas fa-trash"></i></button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
