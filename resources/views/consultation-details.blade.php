@extends('layouts.app')

@section('title')
Health Life is Possible | Consultation
@endsection

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            @include('layouts.side')
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Service Details
                </div>
                <div class="card-body">
                    <h5>{{ $consultation->c_name }}</h5>
                    <div class="card-text">
                        {!! $consultation->c_desc !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection