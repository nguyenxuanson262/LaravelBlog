@extends('admin.app')
@section('title', 'Chỉnh sửa quyền')
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
                                        <h2>Chỉnh sửa quyền</h2>
                                        <div class="lead">
                                            Chỉnh sửa quyền.
                                        </div>

                                        <div class="container mt-4">

                                            <form method="POST" action="{{ route('admin.permissions.update', $permission->id) }}">
                                                @method('patch')
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Tên</label>
                                                    <input value="{{ $permission->name }}"
                                                           type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="Name" required>

                                                    @if ($errors->has('name'))
                                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>

                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                                                <a href="{{ route('admin.permissions.index') }}" class="btn btn-default">Quay lại</a>
                                            </form>
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
