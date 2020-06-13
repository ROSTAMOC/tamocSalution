</p>

<!-- resources/views/dashboard/dashboard.blade.php -->


<p>@extends('index')
@section('title', 'Edit Reservation')
@section('content')</p>

<div class="container">
    <div class="card my-5">
        <div class="card-header">
            @foreach($hotelInfo as $hotelInfos)
            <h2>You're all booked for the {{ $hotelInfos->name }} in {{ $hotelInfos->location }}!</h2>
            @endforeach
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <amp-img src="%7B%7B%20%24hotelInfo->image%20%7D%7D" class="img-fluid" alt="Front of hotel" width="width" height="height" layout="responsive"><noscript><img src="%7B%7B%20%24hotelInfo->image%20%7D%7D" class="img-fluid" alt="Front of hotel" width="width" height="height"></noscript></amp-img>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $hotelInfo->name }} - <small>{{ $hotelInfo->location }}</small>
                        </h3>
                        <p class="card-text">{{ $hotelInfo->description }}</p>
                        <p class="card-text"><strong>Arrival: </strong>{{ $reservation->arrival }}</p>
                        <p class="card-text"><strong>Departure: </strong>{{ $reservation->departure }}</p>
                        <p class="card-text"><strong>Room: </strong>{{ $reservation->room['type'] }}</p>
                        <p class="card-text"><strong>Guests: </strong>{{ $reservation->num_of_guests }}</p>
                        <p class="card-text"><strong>Price: </strong>UGSHs:{{ $reservation->room['price'] }}</p>
                    </div>                    
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/reservations/%7B%7B%20%24reservation->id%20%7D%7D/edit" class="btn btn-lg btn-success">Edit this reservation</a>
                    <a href="/dashboard/reservations/%7B%7B%20%24reservation->id%20%7D%7D/delete" class="btn btn-lg btn-danger">Delete</a> 
                </div>
            </div>            
        </div>
    </div>
</div>


<p>@endsection
