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
                                        <h1>Add new user</h1>
                                        <div class="lead">
                                            Add new user and assign role.
                                        </div>

                                        <div class="container mt-4">
                                            <form method="POST" action="">
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
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input value="{{ old('email') }}"
                                                           type="email"
                                                           class="form-control"
                                                           name="email"
                                                           placeholder="Email address" required>
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input value="{{ old('username') }}"
                                                           type="text"
                                                           class="form-control"
                                                           name="username"
                                                           placeholder="Username" required>
                                                    @if ($errors->has('username'))
                                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                                    @endif
                                                </div>

                                                <button type="submit" class="btn btn-primary">Save user</button>
                                                <a href="{{ route('admin.users.index') }}" class="btn btn-default">Back</a>
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
