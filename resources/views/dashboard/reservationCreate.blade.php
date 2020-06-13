</p>

<!-- resources/views/dashboard/reservationCreate.blade.php -->


<p>@extends('index')
@section('title', 'Create reservation')
@section('content')</p>

<div class="container my-5">
    <div class="card">
        <div class="card-header">

            @foreach( $hotelInfo as $hotelInfos)


            <h2>{{ $hotelInfos->name }} <small class="text-muted">{{ $hotelInfos->location }}</small>
</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Book your stay now at the most magnificent resort in the world!</p>
            <form action="{{ route('reservations.store')}}" method="GET">
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                       
                         <div class="form-group">
                            <label for="room">Room Type</label>
                            <select class="form-control" name="room_id">
                                @foreach ($hotelInfos->rooms as $option)
                                    <option value="{{$option->id}}">{{ $option->type }} - UGSHs:{{ $option->price }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="guests">Number of guests</label>
                            <input class="form-control" name="num_of_guests" placeholder="1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">Arrival</label>
                            <input type="date" class="form-control" name="arrival" placeholder="03/21/2020">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departure">Departure</label>
                            <input type="date" class="form-control" name="departure" placeholder="03/23/2020">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Book it</button>
            </form>
        </div>
        @endforeach
    </div>
</div>


<p>@endsection
