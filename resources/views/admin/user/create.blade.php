@extends('admin.app')
@section('title', 'Thêm mới người dùng')
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
                                        <h1>Tạo mới người dùng</h1>
                                        <div class="lead">
                                            Thêm mới người dùng và chỉ định vai trò
                                        </div>

                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>

                                        <div class="container mt-4">
                                            <form method="POST" action="">
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
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input value="{{ old('email') }}"
                                                           type="email"
                                                           class="form-control"
                                                           name="email"
                                                           placeholder="Email" required>
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>

                                                <button type="submit" value="save" name="mode" class="btn btn-primary">Lưu</button>
                                                <button type="submit" value="save_exit" name="mode" class="btn btn-primary">Lưu và thoát</button>
                                                <a href="{{ route('admin.users.index') }}" class="btn btn-default">Quay lại</a>
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
