@extends('frontend.templates.app')
@section('main')
<div class="py-5" style="background: #ffffff;">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <h4 class="text-uppercase text-center fs-3">Our Rooms</h4>
          </div>
      </div>
      <hr>

      <div class="container py-4">
          <div class="row">
              @foreach ($roomtypes as $roomtype)
                  <div class="col-md-4">
                      <div class="card">
                          <img src="{{ $roomtype->images->first()->image ?? '' }}" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h5 class="card-title">{{ $roomtype->name }}</h5>
                              <p class="card-text">{!! Str::limit($roomtype->description, 100, $end = '...') !!}</p>
                              <p>
                                  <span class="fs-4 text-danger lead">NRS{{ $roomtype->room_charge }}</span>
                                  @if ($roomtype->discount > 0) <span
                                          class="text-secondary text-decoration-line-through">NRS{{ $roomtype->price }}</span>
                                      <span class="text-danger">-{{ $roomtype->discount }}% Off</span>
                                  @endif
                              </p>
                              <a href="{{ route('room.profile', $roomtype->id) }}"
                                  class="link-danger text-decoration-none">Details <span
                                      class="fa fa-arrow-circle-right"></span></a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>

  </div>
</div>
@endsection