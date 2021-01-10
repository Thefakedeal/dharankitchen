@extends('frontend.templates.app')
@section('main')
   <div class="container mx-auto">
    
    @foreach ($roomtypes as $room)
    <section class="text-gray-600 body-font">
      <div class="container mx-auto flex px-5 py-14 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
          {{-- Carousel --}}
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              @foreach ($room->images as $key => $image)
                <div class="carousel-item {{ $key==0 ? "active" : '' }}">
                <img src="{{ $image->image }}" class="d-block w-100" alt="...">
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
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $room->name }}
          </h1>
          <p class="mb-8 leading-relaxed">{{ $room->description }}</p>
          
          <div>
              <ul class="flex flex-wrap justify-self-auto">
                <li class="m-2"><i class="fas fa-thermometer-empty" aria-hidden="true"></i> Aircondition: {{  $room->ac == 1 ? 'Yes' : 'n/a' }}</li>
                  <li class="m-2"><i class="fa fa-taxi" aria-hidden="true"></i> Pickup: {{  $room->pickup == 1 ? 'Yes' : 'n/a' }}</li> 
                  <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: {{  $room->tv == 1 ? 'Yes' : 'n/a' }}</li>    
                  <li class="m-2"><i class="fa fa-parking" aria-hidden="true"></i> Parking: {{  $room->parking == 1 ? 'Yes' : 'n/a' }}</li>   
                  <li class="m-2"><i class="fa fa-wifi" aria-hidden="true"></i> Wifi: {{  $room->wifi == 1 ? 'Yes' : 'n/a' }}</li>   
                  <li class="m-2"><i class="fa fa-plus" aria-hidden="true"></i> <a href="" class="text-gray-800 no-border hover:text-gray-800">More</a></li>   

              </ul>
          </div>

          <div class=" flex p-4 items-center justify-center">
            <div>
                <h3 class="text-red-500 font-bold m-0 p-0 text-2xl">NRS{{ $room->room_charge }} </h3>
                <p class="m-0 p-0 font-light text-sm">per room per night</p>
            </div>
            @if ($room->discount > 0)
              <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS {{ $room->price }}</p>
              <p class="text-red-400 text-sm font-bold">-{{ $room->discount }}% off</p>
            @endif
           
        </div>
          
        <div class="flex justify-center">
          <a href="/room-profile/{{ $room->id }}" class="btn btn-outline-primary m-1">View Details</a>
          <a href="/booking/{{ $room->id }}" class="btn btn-success m-1">Book Now</a>
        </div>

        </div>
      </div>
  </section>
    @endforeach
  
      
   </div>
@endsection