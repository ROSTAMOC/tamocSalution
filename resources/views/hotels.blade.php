</p>

<!-- resources/views/hotels.blade.php -->


<p>@extends('index')
@section('title', 'Hotels')
@section('content')</p>

<div class="container my-5">
    <div class="row">
        <!-- Loop through hotels returned from controller -->
        @foreach ($hotels as $hotel)
        <div class="col-sm-4">
            <div class="card mb-3">
                 <div style="background-image:url('{{ $hotel->image }}');height:300px;background-size:cover;" class="img-fluid" alt="Front of hotel"></div>
               
                <div class="card-body">
                    <h5 class="card-title">{{ $hotel->name }}</h5>
                    <small class="text-muted">{{ $hotel->location }}</small>
                    <p class="card-text">{{ $hotel->description }}</p>
                    <a href="/dashboard/reservations/create/%7B%7B%20%24hotel->id%20%7D%7D" class="btn btn-primary">Book Now</a>
                </div>
            </div>    
        </div>
        @endforeach
    </div>
</div>


<p>@endsection
