@extends('frontend.templates.app')
@section('main')
    <div class="container py-2">
        <h1 class="display-5 text-center">Tourist Attraction</h1>
        <p class="text-center fs-4 fw-light">Places near dharan</p>
        
        <div class="row">
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