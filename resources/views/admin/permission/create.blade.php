@extends('admin.app')
@section('title', 'Thêm mới quyền')
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
                                        <h2>Thêm quyền mới</h2>
                                        <div class="lead">
                                            Thêm quyền mới.
                                        </div>

                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>

                                        <div class="container mt-4">
                                            <form method="POST" action="{{ route('admin.permissions.store') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Tên</label>
                                                    <input value="{{ old('name') }}"
                                                           type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="Nhập tên" required>

                                                    @if ($errors->has('name'))
                                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>

                                                <button type="submit" value="save" name="mode" class="btn btn-primary">Lưu</button>
                                                <button type="submit" value="save_exit" name="mode" class="btn btn-primary">Lưu và thoát</button>
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
