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
            @foreach ($roomtype->images as $key=> $image)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ $image->image }}" class="d-block w-100 h-96 object-cover object-center" alt="...">
              </div>
            @endforeach
              
              
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
                <h1 class="mb-4">{{ $roomtype->name }}</h1>
                <h4>Description</h4>
                <p class="text-gray-600 leading-relaxed">{{ $roomtype->description }}</p>

                <h5>Facilities</h5>
                <div>
                    <ul class="flex flex-wrap justify-self-auto">
                       
                        <li class="m-2"><i class="fa fa-bed" aria-hidden="true"></i> Bed(s): {{ $roomtype->beds }}</li>   
                        <li class="m-2"><i class="fa fa-thermometer-empty" aria-hidden="true"></i> Aircondition: {{ $roomtype->ac == 1 ? "Yes" : 'n/a' }}</li>
                        <li class="m-2"><i class="fa fa-shower" aria-hidden="true"></i> Hot & Cold Water: {{ $roomtype->hot_cold_shower == 1 ? "Yes" : 'n/a' }}</li>
                        <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: {{ $roomtype->tv == 1 ? "Yes" : 'n/a' }}</li>    
                        <li class="m-2"><i class="fa fa-user-tie" aria-hidden="true"></i> Wardrobe: {{ $roomtype->wardrobe == 1 ? "Yes" : 'n/a' }}</li>    
                        <li class="m-2"><i class="fa fa-couch" aria-hidden="true"></i> Sofa: {{ $roomtype->sofa == 1 ? "Yes" : 'n/a' }}</li>    
                        <li class="m-2"><i class="fa fa-tint" aria-hidden="true"></i> Bottle Water: {{ $roomtype->bottled_water == 1 ? "Yes" : 'n/a' }}</li>    
                        <li class="m-2"><i class="fa fa-parking" aria-hidden="true"></i> Parking: {{ $roomtype->parking == 1 ? "Yes" : 'n/a' }}</li>   
                        <li class="m-2"><i class="fa fa-wifi" aria-hidden="true"></i> Wifi: {{ $roomtype->wifi == 1 ? "Yes" : 'n/a' }}</li>  
                        <li class="m-2"><i class="fa fa-taxi" aria-hidden="true"></i> Pickup: {{ $roomtype->pickup == 1 ? "Yes" : 'n/a' }}</li>  
                    </ul>
                </div>

                {{-- Room Category  --}}
                <div class="card">
                    <div class="card-header">
                        <strong> <i class="fas fa-bed"></i> Other Room</strong>
                    </div>
                    <div class="card-body">
                        {{-- First Room --}}

                        @foreach ($roomtypes as $room)
                        <div class="row mt-4">
                            <div class="col-md-9">
                                <h5 class="text-gray-700">{{ $room->name }}</h5>
                                <p class="text-gray-600 text-sm">Room Size 156 Sqft</p>
                                
                                <div>
                                    <ul class="flex flex-wrap justify-self-auto">
                                        <li class="m-2"><i class="fa fa-bed" aria-hidden="true"></i> Bed(s): {{ $room->beds }}</li>   
                                        <li class="m-2"><i class="fas fa-thermometer-empty" aria-hidden="true"></i> Aircondition: {{ $room->ac == 1 ? 'Yes' : 'n/a' }}</li>
                                        <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: {{ $room->tv == 1 ? 'Yes' : 'n/a' }}</li>    
                                    </ul>
                                </div>

                                <div class=" flex p-4 items-center">
                                    <div>
                                        <h3 class="text-red-500 font-bold m-0 p-0 text-2xl">NRS{{ $room->room_charge }} </h3>
                                        <p class="m-0 p-0 font-light text-sm">per room per night</p>
                                    </div>
                                    @if ($room->discount>0)
                                    <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS{{ $room->price }}</p>
                                    <p class="text-red-400 text-sm font-bold">-{{ $room->discount }}% off</p>
                                    @endif
                                    
                                </div>
                                <a href="/room-profile/{{ $room->id }}" class="btn btn-success">Select Room</a>

                            </div>
                            <div class="col-md-3">
                                <img src="{{ $room->images[0]->image }}" alt="" width="200" height="150">
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    
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
                            <h3 class="text-gray-700 font-bold m-0 p-0 text-2xl">NRS{{ $roomtype->room_charge }} </h3>
                            <p class="m-0 p-0 font-light text-sm">inclusive of all taxes</p>
                        </div>
                        @if ($roomtype->discount>0)
                            <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS{{ $roomtype->price }}</p>
                            <p class="text-red-400 text-sm font-bold">-{{ $roomtype->discount }}% off</p>
                        @endif
                    </div>
                    

                    <div class="mx-4 text-red-500">
                        @if ($roomtype->available_rooms <= 10)
                            <p>Only {{ $roomtype->available_rooms }} Room(s) available</p>
                        @endif
                    </div>

                    <div class="flex justify-center block pb-4">
                        <a href="/booking/{{ $roomtype->id }}" class="px-6 py-2 bg-green-500 text-white no-underline hover:bg-green-600">Continue to Book</a>
                    </div>
                      
                </div>

                {{-- Hotel Policies --}}
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