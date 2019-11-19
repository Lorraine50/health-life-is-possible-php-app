@extends('layouts.app')

@section('title')
Health Life is Possible | Booking
@endsection

@section('content')
<div class="container">
    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Booking Details
                </div>
                <div class="card-body">
                    @include('includes.messages')
                    @if (Session::has('booking'))
                    <strong>Your booking details.</strong>
                    <div class='row'>
                        <div class='col'><b>Booking</b></div>
                        <div class='col'><b>Doctor</b></div>
                        <div class='col'><b>Time</b></div>
                        <div class='col'><b>Date</b></div>
                        <div class='col'><b>Price(R)</b></div>
                        <div class='col'><b>Delete</b></div>
                    </div>
                    
                    <div class='row'>
                        <div class='col'>{{ session('name') }}</div>
                        <div class='col'>{{ session('doctor') }}</div>
                        <div class='col'>{{ Session::get('booking')["time"]}}</div>
                        <div class='col'>{{ Session::get('date')}}</div>
                        <div class='col'>R{{ session('price')}}.00</div>
                    <div class='col'><a href="{{route('deleteBooking')}}" class="btn btn-danger btn-sm">Delete</a></div>
                    </div>

                    <div class="row">
                        <div class="col"><a href="{{ route('insertBooking') }}" class="btn btn-secondary">Confirm Booking</a></div>
                    </div>
                    
                    @else
                        <h1 class="display-4">No booking.</h1>
                    @endif
                    <br>
                    
                </div>

                <!-- Previous bookings -->

            </div>
        </div>
    </div>
</div>
@endsection