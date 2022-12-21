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
                                        <h1>Sửa danh mục</h1>
                                        <div class="lead">
                                            Sửa danh mục.
                                        </div>
                                        <div class="mt-2">
                                            @include('admin.messages')
                                        </div>
                                        <div class="container mt-4">
                                            <form id="create_category_form" method="POST" action="{{ route('admin.categories.update', $category->id) }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Danh mục cha</label>
                                                    <select class="form-control"
                                                            name="parent_id">
                                                            <option value=""></option>
                                                            @foreach($categories as $item)
                                                                <option value="{{$item->id}}" @if($category->parent_id == $item->id ) selected @endif>{{$item->name}}</option>
                                                            @endforeach
                                                    </select>
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Danh mục</label>
                                                    <input value="{{ $category->name }}"
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
                                                        <label for="show"> Trạng thái </label>
                                                        <div class="form-check">
                                                            <input type="radio" name="showinhomepage" class="form-check-input" value="1" {{ $category->showinhomepage == '1' ? 'checked' : '' }} />
                                                            <label for="show" class="form-check-label">Hiện</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" name="showinhomepage" class="form-check-input" value="0" {{ $category->showinhomepage == '0' ? 'checked' : '' }} />
                                                            <label for="notshow" class="form-check-label">Ẩn</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Cập nhật</button>
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
@endsection
