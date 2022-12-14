@extends('admin.app')
@section('title', 'Thêm mới vai trò')
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
                                        <h1>Thêm mới vai trò</h1>
                                        <div class="lead">
                                            Thêm mới vai trò và chỉ định quyền.
                                        </div>

                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>

                                        <div class="container mt-4">
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <form method="POST" action="{{ route('admin.roles.store') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Tên</label>
                                                    <input value="{{ old('name') }}"
                                                           type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="Nhập tên" required>
                                                </div>

                                                <label for="permissions" class="form-label">Chỉ định quyền</label>

                                                <table class="table table-striped">
                                                    <thead>
                                                    <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                                    <th scope="col" width="20%">Tên quyền</th>
                                                    <th scope="col" width="1%">Guard</th>
                                                    </thead>

                                                    @foreach($permissions as $permission)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox"
                                                                       name="permission[{{ $permission->name }}]"
                                                                       value="{{ $permission->name }}"
                                                                       class='permission'>
                                                            </td>
                                                            <td>{{ $permission->name }}</td>
                                                            <td>{{ $permission->guard_name }}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>

                                                <button type="submit" value="save" name="mode" class="btn btn-primary">Lưu</button>
                                                <button type="submit" value="save_exit" name="mode" class="btn btn-primary">Lưu và thoát</button>
                                                <a href="{{ route('admin.roles.index') }}" class="btn btn-default">Quay lại</a>
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
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {
                console.log(this)
                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }

            });
        });
    </script>
@endsection
