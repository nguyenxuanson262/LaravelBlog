@extends('admin.app')
@section('title', 'Thông tin chi tiết người dùng')
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
                                        <h1>Thông tin chi tiết</h1>
                                        <div class="lead">

                                        </div>

                                        <div class="container mt-4">
                                            <div>
                                                Tên: {{ $user->name }}
                                            </div>
                                            <div>
                                                Email: {{ $user->email }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mt-4">
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info">Sửa</a>
                                        <a href="{{ route('admin.users.index') }}" class="btn btn-default">Quay lại</a>
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
