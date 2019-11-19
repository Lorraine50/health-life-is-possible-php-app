@extends('layouts.app')

@section('title')
Health Life is Possible | Profile
@endsection

@section('content')
<div class="container">
    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Your previous bookings with Health life is Possible
                </div>
                <div class="card-body">
                    <!-- display success and error messages -->
                    @include('includes.messages')
                    <strong>Welcome to your profile area.</strong>
                    <hr>
                        <a href="{{ route('getBooking') }}" class="btn btn-success btn-secondary btn-outline-danger text-white">Make an appointment</a>
                    <hr>

                    @foreach ($bookings as $book)
                        <div class="card card-body bg-light">
                            <p>{{ App\Consultation::where('id', $book->consultation_id)->value('c_name')}} by Dr. {{ App\Hcp::where('id', $book->hcp_id)->value('hcp_name')}} on <b>{{$book->booking_date}}</b></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection