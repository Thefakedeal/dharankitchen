@extends('frontend.templates.app')
@section('main')    
<div class="container py-4">
        <h1 class="text-center display-4">Tourist Attraction</h1>
        <h5 class="text-center fs-4 fw-light">Places near dharan</h5>
        <hr>
        <div class="row py-4">
          <div class="col-md-4">
              <img src="{{ $place->image }}" alt="" class="img-thumbnail">
          </div>
            <div class="col-md-8">
                <h1 class="display-6 fs-3">{{ $place->name }}</h1>
                <p class="py-2 fw-light">{!! $place->description !!}</p>
            </div> 
        </div>

        <hr>
        <div class="row">
        <h1 class="text-center display-6 fs-3">Similar Places</h1>
            
            @foreach ($places as $place)
            <div class="col-md-3 py-2">
              <div class="card">
                <img src="{{ $place->image }}" class="card-img-top" alt="..." height="200px" class="object-cover w-100">
                <div class="card-body">
                  <h5 class="card-title">{{ $place->name }}</h5>
                  <p class="card-text fw-light">{!! \Illuminate\Support\Str::limit($place->description,150,$end='...') !!}</p>
                  <a href="{{ route('place',$place->id) }}" class="link-danger text-decoration-none">Readmore <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
@endsection