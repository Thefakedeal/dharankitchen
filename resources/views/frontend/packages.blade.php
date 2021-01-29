@extends('frontend.templates.app')

@section('main')
<main>
    <!-- Welcome Section -->
    <div class="py-5" style="background: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-uppercase text-center">Our <span class="text-danger">Packages</span></h1>
                </div>
            </div>

            @foreach ($packages as $package)
            <div class="row py-2">
                <div class="col-md-12">
                    <div class="card mb-3 shadow">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ $package->image }}" alt="..." class="img-fluid">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h1 class="display-6">{{ $package->name }}</h1>
                              <p class="card-text">{!! $package->description !!}</p>
                              @if ($package->price)
                                <p class="card-text">Rs.{{ $package->price }} /-Only</p>    
                              @endif
                              <p class="card-text"><small class="text-muted"><a href="{{ route('contact') }}" class="btn btn-outline-danger float-end my-2">Enquiry</a></small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>  
            </div> 
            @endforeach
            
        </div>
    </div>
    <!-- End -->

</main>
@endsection
