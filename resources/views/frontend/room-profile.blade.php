@extends('frontend.templates.app')

@section('carousel')
     <!-- Carousel -->
  <div class="row">
      <div class="col">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="6500">
             
              <div class="carousel-inner" style="max-height: 60vh;">
                <div class="carousel-inner" style="max-height: 60vh;">
                    @foreach ($roomtype->images as $index=>$image)
                        <div class="carousel-item @if($index==0) active @endif " style="max-height: 60vh;">
                            <img src="{{ $image->image }}" class="d-block w-100" alt="..."
                                style="max-height: 60vh; object-fit: cover;">
                        </div>
                    @endforeach
                </div>
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
  <!-- End -->
@endsection

@section('main')
  <!-- main Section -->
  <main>
      <!-- Welcome Section -->
      <div class="py-5" style="background: #ffffff;">
          <div class="container">
              <div class="row">
                  <div class="col-md-8">
                      <h1 class="text-uppercase">{{ explode(' ',$roomtype->name,2)[0]??'' }}<span class="text-danger"> {{ explode(' ',$roomtype->name,2)[1]??'' }}</span></h1>
                      <p>{{ $roomtype->description }}</p>


                      <!-- Similar Rroom -->
                       <!-- Similar Room Heading -->
                          <div class="py-5" style="background: #ffffff;">
                              <div class="container">
                                  <div class="row justify-content-center">
                                      <div class="col-md-8">
                                          <h4 class="text-uppercase text-center">Similar Rooms</h4>
                                      </div>
                                  </div>

                                  
                                  <div class="container py-4">
                                      <div class="row">
                                          @foreach ($roomtypes as $roomtype)
                                          <div class="col-md-6 my-2">
                                            <div class="card">
                                                <img src="{{ $roomtype->images->first()->image??'' }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <h5 class="card-title">{{ $roomtype->name }}</h5>
                                                <p class="card-text">{{ Str::limit($roomtype->description, 100, $end = '...') }}</p>
                                                <p>
                                                    <span class="fs-3 text-danger lead">NRS{{ $roomtype->room_charge }}</span>
                                                    @if ($roomtype->discount > 0) <span
                                                            class="text-secondary text-decoration-line-through">NRS{{ $roomtype->price }}</span>
                                                        <span class="text-danger">-{{ $roomtype->discount }}% Off</span>
                                                    @endif
                                                </p>
                                                <a href="{{ route('room.profile', $roomtype->id) }}" class="link-danger text-decoration-none">Details <span class="fa fa-arrow-circle-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                          @endforeach
                                          <!-- Deluxe (3x) -->
                                          {{-- <div class="col-md-6 my-2">
                                              <div class="card">
                                                  <img src="https://hotelhimalaya.com.np/images/subpackage/g0l1t-untitled-2.jpg" class="card-img-top" alt="...">
                                                  <div class="card-body">
                                                  <h5 class="card-title">Deluxe (3x)</h5>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                  <p>
                                                      <span class="fs-3 text-danger lead">NRS5000</span> <span class="text-secondary text-decoration-line-through">NRS6000</span> <span class="text-danger">-20% off</span>
                                                  </p>
                                                  <a href="#" class="link-danger text-decoration-none">Details <span class="fa fa-arrow-circle-right"></span></a>
                                                  </div>
                                              </div>
                                          </div>

                                          <!-- Deluxe (2x) -->
                                          <div class="col-md-6 my-2">
                                              <div class="card">
                                                  <img src="https://hotelhimalaya.com.np/images/subpackage/g0l1t-untitled-2.jpg" class="card-img-top" alt="...">
                                                  <div class="card-body">
                                                  <h5 class="card-title">Deluxe (2x)</h5>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                  <p>
                                                      <span class="fs-3 text-danger lead">NRS5000</span> <span class="text-secondary text-decoration-line-through">NRS6000</span> <span class="text-danger">-20% off</span>
                                                  </p>
                                                  <a href="#" class="link-danger text-decoration-none">Details <span class="fa fa-arrow-circle-right"></span></a>
                                                  </div>
                                              </div>
                                          </div>

                                          <!-- Standard (3x) -->
                                          <div class="col-md-6 my-2">
                                              <div class="card">
                                                  <img src="https://hotelhimalaya.com.np/images/subpackage/g0l1t-untitled-2.jpg" class="card-img-top" alt="...">
                                                  <div class="card-body">
                                                  <h5 class="card-title">Standard (2x)</h5>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                  <p>
                                                      <span class="fs-3 text-danger lead">NRS5000</span> <span class="text-secondary text-decoration-line-through">NRS6000</span> <span class="text-danger">-20% off</span>
                                                  </p>
                                                  <a href="#" class="link-danger text-decoration-none">Details <span class="fa fa-arrow-circle-right"></span></a>
                                                  </div>
                                              </div>
                                          </div>

                                          <!-- Normal (2x) -->
                                          <div class="col-md-6 my-2">
                                              <div class="card">
                                                  <img src="https://hotelhimalaya.com.np/images/subpackage/g0l1t-untitled-2.jpg" class="card-img-top" alt="...">
                                                  <div class="card-body">
                                                  <h5 class="card-title">Normal (3x)</h5>
                                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                  <p>
                                                      <span class="fs-3 text-danger lead">NRS5000</span> <span class="text-secondary text-decoration-line-through">NRS6000</span> <span class="text-danger">-20% off</span>
                                                  </p>
                                                  <a href="#" class="link-danger text-decoration-none">Details <span class="fa fa-arrow-circle-right"></span></a>
                                                  </div>
                                              </div>
                                          </div> --}}
                                      </div>
                                  </div>
                                  
                              </div>
                          </div>
                  </div>

                  <div class="col-md-4">
                      <!-- Book your room -->
                      <div class="card-md-4 shadow">
                          <div class="card-header">
                              <h4 class="text-uppercase fs-6">Book your room</h4>
                          </div>
                          <div class="card-body">
                              <p>
                                  <strong class="fs-3">NRS{{ $roomtype->room_charge }}</strong> @if($roomtype->discount>0) <span class="text-decoration-line-through text-secondary">NRS{{ $roomtype->price }}</span> <span class="text-danger">-{{ $roomtype->discount }}% Off</span> @endif <br>
                                  <small class="text-secondary">inclusive of all taxes</small>
                              </p>

                              <p class="lead text-danger fs-6">Only {{ $roomtype->available_rooms }} Room(s) available</p>

                              <a href="{{ route('room.booking',$roomtype->id) }}" class="btn btn-danger btn-sm">Continue to book </a>
                          </div>
                      </div>

                      <!-- Hotel Policy -->
                      <div class="card-md-4 shadow my-4">
                          <div class="card-header">
                              <h4 class="text-uppercase fs-6"><span class="fa fa-user-secret"></span> Hotel Policies</h4>
                          </div>
                          <div class="card-body">
                             <div class="row">
                                 <div class="col">
                                     <p>
                                         <strong>Check In</strong> <br>
                                         12:00 pm
                                     </p>
                                 </div>

                                 <div class="col">
                                  <p>
                                      <strong>Check Out</strong> <br>
                                      12:00 pm
                                  </p>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col">
                                     <ul>
                                         <li>All prices are inclusive of taxes</li>
                                         <li>Couples are welcome</li>
                                         <li>Guests can check in using any Government issued ID proof</li>
                                     </ul>
                                 </div>
                             </div>
                          </div>
                      </div>
                  </div>
                 
              </div>
          </div>
      </div>
      <!-- End -->

   


      
 
  </main>

@endsection