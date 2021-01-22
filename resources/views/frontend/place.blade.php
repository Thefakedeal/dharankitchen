@extends('frontend.templates.app')
@section('main')    
<div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ $place->image }}" alt="..." class="  img-fluid object-cover" height='30vh'>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="py-2">{!! $place->description !!}</p>
            </div> 
        </div>
        <div class="row">
            <h2 class="text-center">Other Places</h2>
            @foreach ($places as $place)
            <div class="col-md-3 py-2">
              <div class="card">
                <img src="{{ $place->image }}" class="card-img-top" alt="..." height="200px" class="object-cover w-100">
                <div class="card-body">
                  <h5 class="card-title">{{ $place->name }}</h5>
                  <p class="card-text fw-light">{{ \Illuminate\Support\Str::limit($place->description,150,$end='...') }}</p>
                  <a href="{{ route('place',$place->id) }}" class="link-danger text-decoration-none">Readmore <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
@endsection