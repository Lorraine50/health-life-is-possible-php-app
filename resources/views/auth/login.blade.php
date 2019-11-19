@extends('layouts.app')

@section('title')
Health Life is Possible | Login
@endsection

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Sign in.
                </div>
                <div class="card-body" style="margin-bottom: 100px;">
                    <!-- display success and error messages -->
                    @include('includes.messages')

                    <div class="card-text">
                        <strong>Enter the email and password you provided at registeration. Your doctor is waiting to
                            receive you.
                        </strong>
                    </div>
                    <br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('loginUser') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection