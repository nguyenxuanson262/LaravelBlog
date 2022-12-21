@extends('admin.app')
@section('title', 'Chỉnh sửa thông tin người dùng')
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
                                        <h1>Sửa người dùng</h1>
                                        <div class="lead">

                                        </div>

                                        <div class="container mt-4">
                                            <form method="post" action="{{ route('admin.users.update', $user->id) }}">
                                                @method('patch')
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Tên</label>
                                                    <input value="{{ $user->name }}"
                                                           type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="Name" required>

                                                    @if ($errors->has('name'))
                                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input value="{{ $user->email }}"
                                                           type="email"
                                                           class="form-control"
                                                           name="email"
                                                           placeholder="Email address" required>
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="role" class="form-label">Vai trò</label>
                                                    <select class="form-control"
                                                            name="role" required>
                                                        <option value="">Chọn vai trò</option>
                                                        @foreach($roles as $role)
                                                            <option value="{{ $role->id }}"
                                                                {{ in_array($role->name, $userRole)
                                                                    ? 'selected'
                                                                    : '' }}>{{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('role'))
                                                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                                                    @endif
                                                </div>

                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
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
