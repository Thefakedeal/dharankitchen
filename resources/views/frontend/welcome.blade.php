@extends('frontend.templates.app')

@section('customcss')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
{{-- Carousel --}}
@section('carousel')
    @include('frontend.carousel.carousel-final')
@endsection

{{-- Main Section --}}
@section('main')
<!-- main Section -->
<main>
    <!-- Welcome Section -->
    <div class="py-5" style="background: #FEF9FF;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="text-uppercase">Redefines the <span class="text-danger">luxury</span> <br> <span class="text-danger">hospitality</span> experience</h1>
                    <p>Dharan Kitchen is prestigious name since 2062 BS (2005 AD) for serving healthy and tasty foods in reasonable price. Your fun destination for food and beverages. We care about your taste and health. We promise in intimate and relaxed dining experience that offers something different to local and foreign dishes and ensures you enjoy a memoriable food experiencene every time.</p>
    
                   <a href="#" class="link-danger text-decoration-none">Readmore <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/IMG_0206.jpg') }}" alt="" class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Explore More Rooms -->
    <div class="py-5" style="background: #ffffff;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-uppercase text-center">Discover our rooms</h4>
                    <h1 class="text-uppercase text-center">Explore <span class="text-danger">Rooms & Suits</span></h1>
                    <p>Hotel Dharan Kitchen provides accommodations with a bar and a terrace. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi. Private parking can be arranged at an extra charge. The rooms in the hotel are fitted with a kettle. At Dharan Kitchen Hotel, rooms include air conditioning and a TV. Guests at the accommodations can enjoy an Asian breakfast. The nearest airport is Biratnagar Airport, 40km from Dharan Kitchen Hotel.</p>
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <a href="{{ route('rooms') }}" class="btn btn-danger btn-lg">Explore More Rooms</a>
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>

    <!-- Rooms Details -->
    <div class="py-5" style="background: #FEF9FF;">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/deluxe3.jpg') }}" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-6">
                    <h1>Deluxe Room</h1>
                    <p>So let's continue what does deluxe room mean? This term was borrowed from the French language " De luxe"and is translated as" luxury ". Deluxe room in hotel - this is a room, improved in all its qualities, and larger than the usual Standard room, and even than the Superior room.</p>
                    <h3>Facilities</h3>
                    <hr>
                      <div class="d-flex flex-row align-self-auto justify-content-evenly">
                          <div><span class="fa fa-wifi"> Free Wifi</span></div>
                          <div><span class="fa fa-tv"> Television</span></div>
                          <div><span class="fa fa-couch"> Sofa</span></div>
                          <div><span class="fa fa-parking"> Parking</span></div>
                      </div>
                    <hr>

                    <a href="{{ route('room.deluxe') }}" class="btn btn-warning btn-lg">View Details</a>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 order-md-last">
                    <img src="{{ asset('img/standard1.jpg') }}" alt="" class="img-thumbnail">
                </div>

                <div class="col-md-6">
                    <h1>Standard Room</h1>
                    <p>A standard room comes in the category of the hotel's cheapest room. It is a type of single room, which has a king-size bed, or as two beds — this room is decorated with two queen-size beds.</p>

                    <h3>Facilities</h3>
                    <hr>
                      <div class="d-flex flex-row align-self-auto justify-content-evenly">
                          <div><span class="fa fa-wifi"> Free Wifi</span></div>
                          <div><span class="fa fa-tv"> Television</span></div>
                          <div><span class="fa fa-couch"> Sofa</span></div>
                          <div><span class="fa fa-parking"> Parking</span></div>
                      </div>
                    <hr>

                    <a href="{{ route('room.standard') }}" class="btn btn-warning btn-lg">View Details</a>
                </div>

                
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/normal1.jpg') }}" alt="" class="img-thumbnail">
                </div>

                <div class="col-md-6">
                    <h1>Normal Room</h1>
                    <p>A Normal room comes in the category of the hotel's cheapest room. It is a type of single room, which has a king-size bed, or as two beds — this room is decorated with two queen-size beds.</p>

                    <h3>Facilities</h3>
                    <hr>
                      <div class="d-flex flex-row align-self-auto justify-content-evenly">
                          <div><span class="fa fa-wifi"> Free Wifi</span></div>
                          <div><span class="fa fa-tv"> Television</span></div>
                          <div><span class="fa fa-parking"> Parking</span></div>
                          <div><span class="fa fa-couch"> Sofa</span></div>
                      </div>
                    <hr>

                    <a href="{{ route('room.normal') }}" class="btn btn-warning btn-lg">View Details</a>
                </div>

               
            </div>
        </div>
    </div>

     <!-- Our Services -->
     <div class="py-5 text-white" style="background-image: url({{ asset('img/bg.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="d-flex flex-column justify-content-center align-items-md-center">
                        <h4 class="text-uppercase fs-lg-3 fs-sm-6">Our Services</h4>
                        <!-- <div class="border border-white w-25 border-2"></div> -->
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center mt-5">
              <div class="col-md-4">
                <ul>
                  <li>Family Restaurant and Bar</li>
                  <li>Sekuwa Corner and Thakali Bhansa</li>
                  <li>Organize Conference/Meeting</li>
                </ul>
              </div>

              <div class="col-md-4">
                <ul>
                  <li>Organize Wedding/Birthday/Anniversary and Cultural Parties</li>
                  <li>Lodging</li>
                </ul>
              </div>
            </div>
  
        </div>
    </div>

    <!-- Tourist Attraction -->
    <div class="py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="text-uppercase text-center">Tourist Attraction</h4>
                <h1 class="text-uppercase text-center">Explorer <span class="text-danger">Dharan</span></h1>
            </div>  
          </div>

            <div class="row mt-5">

              @foreach ($places as $place)
              <div class="col-md-3">
                <div class="card">
                  <img src="{{ $place->image }}" class="card-img-top" alt="..." height="200px" class="object-cover w-100">
                  <div class="card-body">
                    <h5 class="card-title">{{ $place->name }}</h5>
                    <p class="fw-light">{!! \Illuminate\Support\Str::limit($place->description,150,$end='...') !!}</p>
                    <a href="{{ route('place',$place->id) }}" class="link-danger text-decoration-none">Readmore <i class="fa fa-arrow-alt-circle-right"></i></a>
                  </div>
                </div>
              </div>
              @endforeach
              <!-- Budda Subba -->
              {{-- <div class="col-md-3">
                <div class="card">
                  <img src="https://images.pexels.com/photos/507932/pexels-photo-507932.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Budda Subba</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <!-- Dantakali -->
              <div class="col-md-3">
                <div class="card">
                  <img src="https://images.pexels.com/photos/415708/pexels-photo-415708.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Dantakali Temple</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <!-- Pindesori Temple -->
              <div class="col-md-3">
                <div class="card">
                  <img src="https://images.pexels.com/photos/257092/pexels-photo-257092.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Pindesori TEmple</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <img src="https://images.pexels.com/photos/301614/pexels-photo-301614.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Namastee Jharna</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div> --}}
            </div>

            <div class="text-center pt-4">
              <a href="{{ route('places') }}" class="btn btn-danger btn-lg">Explore More Places</a>

            </div>
           

        </div>
    </div>

    <!-- News & Events -->
    <div class="py-5" style="background: #FEF9FF;;">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-12">
            <h4 class="text-center text-uppercase">News & Events</h4>
          </div>
        </div>

        <div class="row">
          @foreach ($events as $event)
          <div class="col-md-6 bg-white mt-md-2 rounded-3">
            <div class="row">
              <div class="col-md-6">
                <img src="{{ $event->images->first()->image??'' }}" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 py-2">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text fw-light">{!! Str::limit($event->description,100, $end='...')  !!}</p>

                <div class="row">
                  <div class="col">
                    <span class="fw-light"> <i class="fa fa-calendar-alt text-secondary"></i> {{ $event->date }}</span>
                  </div>
                  <div class="col">
                    <a href="/event/{{ $event->id }}" class="link-danger">Readmore <span class="fa fa-arrow-alt-circle-right"></span></a>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="text-center pt-4">
          <a href="{{ route('events') }}" class="btn btn-danger btn-lg">See More</a>
        </div>

      </div>
    </div>

    <!-- Our Location -->
    <div class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h4 class="text-uppercase text-center">Our Location</h4>
          </div>
        </div>
        <div class="row my-4">
          <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.8753919024866!2d87.28645529253524!3d26.801881259588676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef41910d4acb5d%3A0x12a28ac5cb9d6b21!2sDharan%20Kitchens%20Sekuwa%20Corner%20and%20Thakali%20Kitchen!5e0!3m2!1sen!2snp!4v1611157766803!5m2!1sen!2snp"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100" height="450"></iframe>
          </div>
        </div>
      </div>
    </div>
</main>

<!-- Main Ends -->
@endsection