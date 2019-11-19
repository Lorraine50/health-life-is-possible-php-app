@extends('layouts.app')

@section('title')
Health Life is Possible | Update
@endsection

@section('content')
<div class="container">
    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Profile Update
                </div>
                <div class="card-body">
                    <!-- display success and error messages -->
                    @include('includes.messages')
                    
                    <strong>You may update your profile details here.</strong>

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('userUpdate') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Your Name</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telephone (Home)</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tel_h" value="{{$user->tel_h}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telephone (Work)</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tel_w" value="{{$user->tel_w}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telephone (Cell)</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tel_c" value="{{$user->tel_c}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="reference" class="col-md-4 control-label">Reference</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="reference" value="{{$user->reference}}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{$user->dob}}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="addr" class="col-md-4 control-label">Home Address</label>

                            <div class="col-md-6">
                                <textarea name="addr" class="form-control" id="addr" cols="30" rows="10">{{$user->addr}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="gender" value="{{$user->gender}}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-edit"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- Previous bookings -->

            </div>
        </div>
    </div>
</div>
@endsection