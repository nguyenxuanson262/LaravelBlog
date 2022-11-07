@extends('admin.app')
@section('title', 'dashboard')
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
                                        <h2>Add new permission</h2>
                                        <div class="lead">
                                            Add new permission.
                                        </div>

                                        <div class="container mt-4">

                                            <form method="POST" action="{{ route('admin.permissions.store') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input value="{{ old('name') }}"
                                                           type="text"
                                                           class="form-control"
                                                           name="name"
                                                           placeholder="Name" required>

                                                    @if ($errors->has('name'))
                                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>

                                                <button type="submit" class="btn btn-primary">Save permission</button>
                                                <a href="{{ route('admin.permissions.index') }}" class="btn btn-default">Back</a>
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