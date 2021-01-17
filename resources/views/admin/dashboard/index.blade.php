@extends('admin.admin')

@section('content')
<div class="row pt-4">
    @foreach ($roomtypes as $roomtypes)
    <div class="col-md-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $roomtypes->available_rooms }}</h3>
  
            <p> <b> {{ $roomtypes->name }} </b> - Available Rooms</p>
          </div>
          <div class="icon">
            <i class="fa fa-person-booth"></i>
          </div>
          <a href="{{ route('roomtype.edit',$roomtypes->id) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    @endforeach
    <div class="col-md-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $guests }}</h3>

          <p>Number Of Guests</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="{{ route('checkin.index') }}?checkedout=0" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-md-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $newbooking }}</h3>
  
            <p>New Bookings</p>
          </div>
          <div class="icon">
            <i class="fa fa-book"></i>
          </div>
          <a href="{{ route('admin.booking.new') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <!-- ./col -->
    
</div>
@endsection