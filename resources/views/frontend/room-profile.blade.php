@extends('frontend.templates.app')
@section('main')
    <div class="container mx-auto">
        <div class="w-full h-96 sm:mt-4 lg:mt-10">
           {{-- Carousel --}}
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner h-96">
              <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100 h-96 object-cover object-center" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3201763/pexels-photo-3201763.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100 h-96 object-cover object-center" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100 h-96 object-cover object-center" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          {{-- End Carousel --}}
        </div>
        <div class="lg:grid lg:grid-cols-3 gap-10 lg:mt-10">
            <div class="col-span-2">
                <h1 class="mb-4">Deluxe Double Room</h1>
                <h4>Description</h4>
                <p class="text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptas est id doloribus quos ipsam ut provident accusamus impedit minus, repudiandae dignissimos error quas magni adipisci sed pariatur, rerum corrupti.</p>

                <h5>Facilities</h5>
                <div>
                    <ul class="flex flex-wrap justify-between">
                        <li class="m-2"><i class="fa fa-bed" aria-hidden="true"></i> Bed(s): 2</li>   
                        <li class="m-2"><i class="fas fa-thermometer-empty" aria-hidden="true"></i> Aircondition: n/a</li>
                        <li class="m-2"><i class="fas fa-shower" aria-hidden="true"></i> Hot & Cold Water: n/a</li>
                        <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: Yes</li>    
                        <li class="m-2"><i class="fa fa-user-tie" aria-hidden="true"></i> Wardrobe: Yes</li>    
                        <li class="m-2"><i class="fa fa-couch" aria-hidden="true"></i> Sofa: Yes</li>    
                        <li class="m-2"><i class="fa fa-tint" aria-hidden="true"></i> Bottle Water: Yes</li>    
                        <li class="m-2"><i class="fa fa-parking" aria-hidden="true"></i> Parking: Yes</li>   
                        <li class="m-2"><i class="fa fa-wifi" aria-hidden="true"></i> Wifi: Yes</li>  
                        <li class="m-2"><i class="fa fa-taxi" aria-hidden="true"></i> Pickup: yes</li>  
                    </ul>
                </div>

                {{-- Room Category  --}}
                <div class="card">
                    <div class="card-header">
                        <strong> <i class="fas fa-bed"></i> Similar Room</strong>
                    </div>
                    <div class="card-body">
                        {{-- First Room --}}
                        <div class="row mt-4">
                            <div class="col-md-9">
                                <h5 class="text-gray-700">Deluxe (3x)</h5>
                                <p class="text-gray-600 text-sm">Room Size 156 Sqft</p>
                                
                                <div>
                                    <ul class="flex flex-wrap justify-self-auto">
                                        <li class="m-2"><i class="fa fa-bed" aria-hidden="true"></i> Bed(s): 2</li>   
                                        <li class="m-2"><i class="fas fa-thermometer-empty" aria-hidden="true"></i> Aircondition: n/a</li>
                                        <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: Yes</li>    
                                    </ul>
                                </div>

                                <div class=" flex p-4 items-center">
                                    <div>
                                        <h3 class="text-red-500 font-bold m-0 p-0 text-2xl">NRS2000 </h3>
                                        <p class="m-0 p-0 font-light text-sm">per room per night</p>
                                    </div>
                                    <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS2500</p>
                                    <p class="text-red-400 text-sm font-bold">-20% off</p>
                                </div>
                                <a href="" class="btn btn-success">Select Room</a>

                            </div>
                            <div class="col-md-3">
                                <img src="https://images.pexels.com/photos/3201763/pexels-photo-3201763.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" width="200" height="150">
                            </div>
                        </div>

                        <hr>
                        {{-- Second Room --}}
                        <div class="row mt-4">
                            <div class="col-md-9">
                                <h5 class="text-gray-700">Deluxe (3x)</h5>
                                <p class="text-gray-600 text-sm">Room Size 156 Sqft</p>
                                
                                <div>
                                    <ul class="flex flex-wrap justify-self-auto">
                                        <li class="m-2"><i class="fa fa-bed" aria-hidden="true"></i> Bed(s): 2</li>   
                                        <li class="m-2"><i class="fas fa-thermometer-empty" aria-hidden="true"></i> Aircondition: n/a</li>
                                        <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: Yes</li>    
                                    </ul>
                                </div>

                                <div class=" flex p-4 items-center">
                                    <div>
                                        <h3 class="text-red-500 font-bold m-0 p-0 text-2xl">NRS2000 </h3>
                                        <p class="m-0 p-0 font-light text-sm">per room per night</p>
                                    </div>
                                    <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS2500</p>
                                    <p class="text-red-400 text-sm font-bold">-20% off</p>
                                </div>
                                <a href="" class="btn btn-success">Select Room</a>

                            </div>
                            <div class="col-md-3">
                                <img src="https://images.pexels.com/photos/3201763/pexels-photo-3201763.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" width="200" height="150">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 sticky top-0">
                <div class="shadow border-1">
                    {{-- Header --}}
                    <div class="bg-gradient-to-r from-red-600 text-white ">
                        <h6 class="p-2">BOOK YOU ROOM</h6>
                    </div>
                    {{-- Body --}}
                    <div class=" flex items-content-center p-4 items-center">
                        <div>
                            <h3 class="text-gray-700 font-bold m-0 p-0 text-2xl">NRS2000 </h3>
                            <p class="m-0 p-0 font-light text-sm">inclusive of all taxes</p>
                        </div>
                        <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS2500</p>
                        <p class="text-red-400 text-sm font-bold">-20% off</p>
                    </div>

                    <div class="flex justify-center block pb-4">
                        <a href="" class="px-6 py-2 bg-green-500 text-white no-underline hover:bg-green-600">Continue to Book</a>
                    </div>
                      
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                       <i class="fas fa-shield-alt"></i> <strong>Hotel Policies</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="checkin" class="font-bold">Check in</label>
                                     <div>
                                        <label for="">12:00 pm</label>
                                     </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="checkout" class="font-bold">Check out</label>
                                     <div>
                                        <label for="">12:00 pm</label>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <ul class="mt-4">
                            <li class="text-sm text-gray-700 list-disc">All prices are inclusive of taxes.</li>
                            <li class="text-sm text-gray-700 list-disc">Couples are welcome</li>
                            <li class="text-sm text-gray-700 list-disc">Guests can check in using any Government issued ID proof</li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection