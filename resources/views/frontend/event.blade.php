@extends('frontend.templates.app')
@section('carousel')
    <div class="row">
        <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="6500">

                <div class="carousel-inner" style="max-height: 60vh;">
                    @foreach ($event->images as $index=>$image)
                        <div class="carousel-item @if($index==0) active @endif " style="max-height: 60vh;">
                            <img src="{{ $image->image }}" class="d-block w-100" alt="..."
                                style="max-height: 60vh; object-fit: cover;">
                        </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection
@section('main')    
<div class="container py-4">
    
        <h1 class="text-center display-6">News & Events</h1>
        <h5 class="text-center fs-4 fw-light">Get updated with recent news & events</h5>
        <hr>
        <div class="row py-4">
            <div class="col-md-12">
                <h1 class="display-6 fs-3 text-danger">{{ $event->title }}</h1>
                <p class="py-2 fw-light">{!! $event->description !!}</p>
            </div> 
        </div>

        <hr>
        <div class="row">
        <h1 class="text-center display-6 fs-3">Others Events</h1>
            
            @foreach ($events as $event)
            <div class="col-md-3 py-2">
              <div class="card">
                <img src="{{ $event->images->first()->image??'' }}" alt="" class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">{{ $event->name }}</h5>
                  <p class="card-text fw-light">{!! \Illuminate\Support\Str::limit($event->description,150,$end='...') !!}</p>
                  <a href="{{ route('event',$event->id) }}" class="link-danger text-decoration-none">Readmore <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
@endsection