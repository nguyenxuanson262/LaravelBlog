@extends('public.app')
@section('title', 'Registration')
@section('content')
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url({{ asset('assets/img/blog-img/bg4.jpg') }});"></div>
    <!-- ********** Hero Area End ********** -->

    <main class="login-form container-fluid p-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="bg-img">
                    <img class="w-100" src="{{ asset('assets/img/blog-img/b1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="text-center mb-3">Register User</h5>
                <form class="w-50 m-auto" action="{{ route('register.custom') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                               required autofocus>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email_address" class="form-control"
                               name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control"
                               name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember"> Remember Me</label>
                        </div>
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
