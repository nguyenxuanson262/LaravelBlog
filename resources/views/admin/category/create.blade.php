@extends('admin.app')
@section('title', 'Thêm mới')
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
                                        <h1>Thêm mới danh mục</h1>
                                        <div class="lead">
                                            Thêm mới danh mục.
                                        </div>
                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>
                                        <div class="container mt-4">
                                            <form id="create_category_form" method="POST" action="{{ route('admin.categories.store') }}">
                                                <input type="hidden" name="mode" value="save">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Danh mục cha</label>
                                                    <select class="form-control"
                                                            name="parent_id">
                                                        <option value="">Chọn danh mục cha</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('parent_id'))
                                                        <span class="text-danger text-left">{{ $errors->first('parent_id') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Danh mục</label>
                                                    <input value="{{ old('name') }}"
                                                           type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="Nhập danh mục" required>

                                                    @if ($errors->has('name'))
                                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-group my-3">
                                                        <label for="gender"> Trạng thái </label>
                                                        <div class="form-check">
                                                            <input type="radio" name="showinhomepage" class="form-check-input" value="1" />
                                                            <label for="show" class="form-check-label">Hiện</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" name="showinhomepage" class="form-check-input" value="0" />
                                                            <label for="notshow" class="form-check-label">Ẩn</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button onclick="submitForm(this)" type="button" class="btn btn-primary" data-value="save">Lưu danh mục</button>
                                                <button onclick="submitForm(this)" type="button" class="btn btn-primary" data-value="save_exit">Lưu và thoát</button>
                                                <a href="{{ route('admin.categories.index') }}" class="btn btn-default">Quay lại</a>
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
    <script>
        function submitForm(el) {
            $('[name="mode"]').val($(el).data('value'))
            $('#create_category_form').submit()
        }
    </script>
@endsection
