@extends('frontend.templates.app')

@section('main')    
<div class="container py-4">
    
        <h1 class="text-center display-6">News & Events</h1>
        <h5 class="text-center fs-4 fw-light">Get updated with recent news & events</h5>
        <hr>
        <div class="row">
            
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