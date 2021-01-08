@extends('frontend.templates.app')

@section('main')
   <div class="container mx-auto">
  
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
                <div class="carousel-item active">
                  <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://images.pexels.com/photos/3201763/pexels-photo-3201763.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
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
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Deluxe (3x)
            </h1>
            <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
            
            <div>
                <ul class="flex flex-wrap justify-between">
                    <li class="m-2"><i class="fas fa-thermometer-empty" aria-hidden="true"></i> Aircondition: Yes</li>
                    <li class="m-2"><i class="fa fa-taxi" aria-hidden="true"></i> Pickup: yes</li> 
                    <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: Yes</li>    
                    <li class="m-2"><i class="fa fa-parking" aria-hidden="true"></i> Parking: Yes</li>   
                    <li class="m-2"><i class="fa fa-wifi" aria-hidden="true"></i> Wifi: Yes</li>   
                    <li class="m-2"><i class="fa fa-plus" aria-hidden="true"></i> <a href="" class="text-gray-800 no-border hover:text-gray-800">More</a></li>   

                </ul>
            </div>

            <div class=" flex p-4 items-center justify-center">
              <div>
                  <h3 class="text-red-500 font-bold m-0 p-0 text-2xl">NRS2000 </h3>
                  <p class="m-0 p-0 font-light text-sm">per room per night</p>
              </div>
              <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS2500</p>
              <p class="text-red-400 text-sm font-bold">-20% off</p>
          </div>
            
          <div class="flex justify-center">
            <a href="/room-profile" class="btn btn-outline-primary m-1">View Details</a>
            <a href="/booking" class="btn btn-success m-1">Book Now</a>
          </div>

          </div>
        </div>
    </section>

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
                <div class="carousel-item active">
                  <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://images.pexels.com/photos/3201763/pexels-photo-3201763.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
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
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Standard (2x)
            </h1>
            <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
            
            <div>
                <ul class="flex flex-wrap justify-between">
                    <li class="m-2"><i class="fas fa-thermometer-empty" aria-hidden="true"></i> Aircondition: n/a</li>
                    <li class="m-2"><i class="fa fa-taxi" aria-hidden="true"></i> Pickup: yes</li> 
                    <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: Yes</li>    
                    <li class="m-2"><i class="fa fa-parking" aria-hidden="true"></i> Parking: Yes</li>   
                    <li class="m-2"><i class="fa fa-wifi" aria-hidden="true"></i> Wifi: Yes</li>   
                    <li class="m-2"><i class="fa fa-plus" aria-hidden="true"></i> <a href="" class="text-gray-800 no-border hover:text-gray-800">More</a></li>   

                </ul>
            </div>

            <div class=" flex p-4 items-center justify-center">
              <div>
                  <h3 class="text-red-500 font-bold m-0 p-0 text-2xl">NRS2000 </h3>
                  <p class="m-0 p-0 font-light text-sm">per room per night</p>
              </div>
              <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS2500</p>
              <p class="text-red-400 text-sm font-bold">-20% off</p>
          </div>
            

          <div class="flex justify-center">
            <a href="/room-profile" class="btn btn-outline-primary m-1">View Details</a>
            <a href="/booking" class="btn btn-success m-1">Book Now</a>
          </div>

          </div>
        </div>
    </section>

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
              <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3201763/pexels-photo-3201763.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="...">
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
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Normal (2x)
          </h1>
          <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
          
          <div>
              <ul class="flex flex-wrap justify-between">
                  <li class="m-2"><i class="fas fa-thermometer-empty" aria-hidden="true"></i> Aircondition: n/a</li>
                  <li class="m-2"><i class="fa fa-taxi" aria-hidden="true"></i> Pickup: yes</li> 
                  <li class="m-2"><i class="fa fa-tv" aria-hidden="true"></i> Tv: Yes</li>    
                  <li class="m-2"><i class="fa fa-parking" aria-hidden="true"></i> Parking: Yes</li>   
                  <li class="m-2"><i class="fa fa-wifi" aria-hidden="true"></i> Wifi: Yes</li>   
                  <li class="m-2"><i class="fa fa-plus" aria-hidden="true"></i> <a href="" class="text-gray-800 no-border hover:text-gray-800">More</a></li>   
              </ul>
          </div>

          <div class=" flex p-4 items-center justify-center">
            <div>
                <h3 class="text-red-500 font-bold m-0 p-0 text-2xl">NRS2000 </h3>
                <p class="m-0 p-0 font-light text-sm">per room per night</p>
            </div>
            <p class="line-through text-sm text-gray-500 lg:ml-1 lg:mr-1">NRS2500</p>
            <p class="text-red-400 text-sm font-bold">-20% off</p>
        </div>

          <div class="flex justify-center">
            <a href="/room-profile" class="btn btn-outline-primary m-1">View Details</a>
            <a href="/booking" class="btn btn-success m-1">Book Now</a>
          </div>
        </div>
      </div>
  </section>


    

      
   </div>
@endsection