@extends('public.app')
@section('title', 'Login')
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
                <h5 class="text-center mb-3">login page</h5>
                <form class="w-50 m-auto" method="POST" action="{{ route('login.custom') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                               autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Signin</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
