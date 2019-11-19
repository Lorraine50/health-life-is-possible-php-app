@extends('layouts.app')

@section('title')
Health Life is Possible | About
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
                    About us
                </div>
                <div class="card-body">
                    <p>Health life is the best health care care clinic in Durban, we have the best medical practices and 
                        our doctors are the best. Try us today for awesome health care. 
                    </p>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection