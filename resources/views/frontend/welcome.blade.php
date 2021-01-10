@extends('frontend.templates.app')

{{-- Carousel --}}
@section('carousel')
    @include('frontend.carousel.carousel')
@endsection

{{-- Main Section --}}
@section('main')
     <!-- Highlights -->
    <div class="text-center mt-10">
        <h1 class="text-4xl mt-10 font-bold font-serif">Highlights</h1>
        <p class="text-gray-600 font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, cum.</p>
        
            <div class="container mx-auto grid sm:grid-cols-1 lg:grid-cols-3 gap-4 mt-10">
                <!-- Highlights -->
                <div class="shadow-2xl h-auto ">
                    <img src="https://lh5.googleusercontent.com/p/AF1QipNiI8jU5Mmz1QCYBTy6dzoA_uGx5i0vW7D1zU4s=s1600-w400" alt="" class="h-62 w-full object-cover object-center">
                    
                </div>

                <div class="shadow-2xl h-auto ">
                    <img src="https://mk0hotrodum5xf2n5ib6.kinstacdn.com/wp-content/uploads/2018/04/honey-barbecue-sriracha-wings.jpeg" alt="" class="h-62 w-full object-cover object-center">
                
                </div>

                <div class="shadow-2xl h-auto ">
                <img src="https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="h-62 w-full object-cover object-center">
                
                </div>
                <!-- End of Room Card -->
            </div>
    </div>
<!-- Highlight Ends -->


<!-- Book a Room -->
<div class="text-center">
    <h1 class="text-4xl mt-10 font-bold font-serif">OUR ROOMS</h1>
    <p class="text-gray-600 font-light"> 
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur obcaecati 
    </p>
    <div class="w-10 h-2 border-red-500 border-blue-50"></div>
    <form action="">
        <div class="lg:flex justify-center bg-gray-100 w-full mx-auto my-auto items-end mt-10">
            <div class="p-4 ">
                <h1 class="font-medium text-xl">Check in</h1>
                <input type="date" name="" id="" class="p-2 w-60">
            </div>
            <div class="p-4">
                <h1 class="text-xl">Check out</h1>
                <input type="date" name="" id="" class="p-2 w-60">
            </div>  
            <button type="submit" class="bg-blue-500 px-10 py-2 m-4 text-white rounded hover:bg-blue-600">Book Now</button>
        </div>
    </form>
</div>
<!-- Book a Room Ends -->

<!-- Main-->
<div class="lg:container mx-auto mt-10">
   <!-- Our Room -->
    <div class="grid sm:grid-cols-1 lg:grid-cols-4 gap-4">
        <!-- Room Card Start -->
        {{-- <a href="" class="no-underline text-gray-800 hover:text-gray-800">
            <div class="shadow-2xl h-auto">
                <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="h-48 w-full object-cover object-center">
                <div class="p-2">
                    <h1 class="text-2xl mb-2 mt-2 font-weight-bold">Delux Double Room</h1>
                    <p class="font-light">Lorem ipsum dolor sit amet.</p>
                    <div class=" flex justify-between items-center">
                        <h3 class="text-red-500 mb-0 font-bold">NPR5000</h3>
                        <p class="line-through text-sm">NPR7000</p>
                        <p class="text-red-500 text-sm">28% off</p>
                    </div>
                    <p class="font-light mt-0 text-sm">per room per night</p>
                </div>
            </a> --}}
            @foreach ($roomtypes as $roomtype)
            <a href="/room-profile/{{ $roomtype->id }}" class="no-underline text-gray-800 hover:text-gray-800">
              <div class="shadow-2xl h-auto">
                @if (count($roomtype->images)>0)
                <img src="{{ $roomtype->images[0]->image }}" alt="" class="h-48 w-full object-cover object-center">
                @else
                <img src="https://www.thermaxglobal.com/wp-content/uploads/2020/05/image-not-found.jpg" alt="" class="h-48 w-full object-cover object-center">
                @endif
                  <div class="p-2">
                      <h1 class="text-2xl mb-2 mt-2 font-weight-bold">{{ $roomtype->name??'Room' }}</h1>
                      <p class="font-light">{{ \Illuminate\Support\Str::limit($roomtype->description, 50, $end='...') }}
                      </p>
                      <div class=" flex justify-between items-center">
                          <h3 class="text-red-500 mb-0 font-bold">Rs. {{ $roomtype->room_charge }}</h3>
                          @if ($roomtype->discount>0)
                          <p class="line-through text-sm">Rs. {{ $roomtype->price }}</p>
                          <p class="text-red-500 text-sm">-{{ $roomtype->discount }}% off</p>
                          @endif
                      </div>
                      <p class="font-light mt-0 text-sm">per room per night</p>
                  </div>
                 
              
          </div>
        </a>  
        @endforeach
        

       

        
        <!-- End of Room Card -->
    </div>
  <!-- Our Ends -->

    <!-- More Button -->
    <div class="flex justify-center">
        <a href="" class="bg-blue-500 text-white px-6 py-2 mt-10 rounded hover:bg-blue-600 no-underline">See More [+]</a>
    </div>
    <!-- More Button Ends -->

    <!-- Party Palace Summary -->
    <div class="lg:flex sm:m-2 lg:mt-10 bg-gray-100 rounded shadow p-2">
        <img src="https://media.weddingz.in/images/f8189586e9bbd70a31f49bba8f44a9de/hvps-banquet-hall-hvps-banquet-album-2.jpg" alt="" class="lg:w-1/2">
        <div class="p-2">
            <h1 class="text-3xl mb-4">Party Palace</h1>
            <h2 class="text-xl font-serif">All in one venue for seminars, celebration & conferences</h2>

            <p class="mb-10 font-light">
              We got a 300 seating capacity based Conference Hall suitable for all purposes depending upon the seating arrangement.
              The hall can be used for a conference or seminars with our well equipped facilities such as projector, screen, adjustible air conditioner, white boards, stage, mic and sound system.
              If your conference is set along with the lunch or dinner, we have a private rooftop dining hall.
              The banquet setting is suitable for celebrations such as weaning ceremonies, wedding parties amongst others meanwhile the theatre setting is suitable for conferences and presentation based seminars.
              The banquet hall can be prebooked 60 hours earlier to your booking time based upon the availablility. You can leave us a message on our contact form on this website or call us to book the venue along with your preferred choice of menu and number of guests.
            </p>
        </div>
    </div>
    <!-- Party Palace Ends -->

    <!-- Dining -->
    <div class="lg:flex m-2 bg-gray-100 rounded shadow">
      <img src="https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="lg:w-1/2 lg:order-last">
      <div class="p-2">
          <h1 class="text-3xl mb-4">Dining</h1>
          <h2 class="text-xl font-serif">Enjoy the best dishes with great tastes</h2>
          <p class="mb-10 font-light">
            A warm and intimate atmosphere, excellent service and exquisite cuisine is what you will experience when you visit our restaurant cum bar. Our restaurant is divided between private and public dining. Private dining and bar is a 35 seater restaurant meanwhile a public dining is available in our lobby space.
            We offer an unpretentious escape from the everyday schedule with a classic, produce-driven menu, a convivial atmosphere fueled by the warmth, friendly staff , and entertainment such as of selected music and sports channel on demand. Whether nestled inside the dining room, relaxing in the lounge or outside on your room overlooking the georgeous Biratnagar, the mysterious alchemy of Hotel Ratna's food, ambience and service create a habit-forming experience.
            The restaurant can be prebooked 24 hours earlier to your booking time.You can leave us a message on our contact form on this website or call us to book your table along with your preferred choice of menu and number of guests.
          </p>
      </div>
    </div>
    <!-- Dining Ends -->

    <!-- Meeting Hall -->
    <div class="lg:flex m-2 bg-gray-100 rounded shadow">
      <img src="https://images.pexels.com/photos/260689/pexels-photo-260689.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="lg:w-1/2 object-cover">
      <div class="p-2">
          <h1 class="text-3xl mb-4">Meeting</h1>
          <h2 class="text-xl font-serif">We provide greate services for your meetings</h2>
          <p class="mb-10 font-light">
            Our board room is a 50 pax capacity hall, which is fully functional to operate as a meeting hall for the board of directors. Equipped with latest of technology, we have most of the resources at your disposal.
            The Bord of Director Meeting room comes with an adjustible air conditioner for any weather types. It includes a projector, a screen for the projector, an attached washroom, white board and extra chairs for the board members.
            We also supply food directly to the board of directors table and the meeting room comes with a separate tea space with table and chairs.
            One of the most important feature of our board room is it's sound proof walls, maintaining complete secrecy of your meetings.
            The meeting room can be prebooked 24 hours earlier to your booking time. You can leave us a message on our contact form on this website or call us to book the venue along with your preferred choice of menu and number of guests.
          </p>
      </div>
    </div>
    <!-- Meeting Hall Ends -->

    <!-- Sightseens -->
    <div class="mt-10 text-center bg-gray-100 p-2">
        <h1 class="text-4xl mt-10 font-bold">SIGHTSEEING</h1>
        <p class="text-gray-600 font-light"> 
            Nearby places of attraction
        </p>
         <!-- Places Detail -->
         <!-- Buddha Subba -->
        <div class="lg:flex ml-2 mt-10 mb-10 mr-2">
            <img src="https://i.pinimg.com/originals/9b/d8/7e/9bd87e67f09c4274a72411da57b892f4.jpg" alt="" class="order-last lg:w-1/2">
            <div class="text-left p-2">
                <h1 class="text-3xl mb-4">Budda Subba Temple</h1>
                <p class="text-gray-600 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam consectetur quia expedita nesciunt similique cumque libero ea pariatur neque alias ratione, porro et, fugit cum assumenda saepe culpa nulla minima sit aut labore dolor deleniti sunt. Nemo adipisci alias voluptate delectus consequuntur suscipit magni illo voluptates deserunt? Nobis, distinctio officia.</p>

                <ul class="mt-10">
                    <li>Location: <span class="font-bold">Bijayapur, Dharan-14</span></li>
                    <li>Distance: <span class="font-bold">3 Kilometer from Dharan </span></li>
                    <li>Time: <span class="font-bold">10-15 Min from Vehicles</span></li>
                </ul>

            </div>
        </div>

         <!-- Dantakali Temple -->
         <div class="lg:flex m-2">
            <img src="https://i1.wp.com/notesnepal.com/wp-content/uploads/2020/11/74865412dantakali_sunsari-ph.jpeg?resize=720%2C514&ssl=1" alt="" class="lg:w-1/2">
            <div class="text-left p-2">
                <h1 class="text-3xl mb-4">Dantakali Temple</h1>
                <p class="text-gray-600 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam consectetur quia expedita nesciunt similique cumque libero ea pariatur neque alias ratione, porro et, fugit cum assumenda saepe culpa nulla minima sit aut labore dolor deleniti sunt. Nemo adipisci alias voluptate delectus consequuntur suscipit magni illo voluptates deserunt? Nobis, distinctio officia.</p>

                <ul class="mt-10">
                    <li>Location: <span class="font-bold">Bijayapur, Dharan-14</span></li>
                    <li>Distance: <span class="font-bold">3 Kilometer from Dharan </span></li>
                    <li>Time: <span class="font-bold">10-15 Min from Vehicles</span></li>
                </ul>
            </div>
            
        </div>

        <!-- Pindeswori Temple -->
        <div class="lg:flex m-2">
            <img src="https://www.holidify.com/images/cmsuploads/compressed/Pindeshwor_Temple-Dharan_31_20190718102448.jpg" alt="" class="order-last lg:w-1/2">
            <div class="text-left p-2">
                <h1 class="text-3xl mb-4">Pindeswori Temple</h1>
                <p class="text-gray-600 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam consectetur quia expedita nesciunt similique cumque libero ea pariatur neque alias ratione, porro et, fugit cum assumenda saepe culpa nulla minima sit aut labore dolor deleniti sunt. Nemo adipisci alias voluptate delectus consequuntur suscipit magni illo voluptates deserunt? Nobis, distinctio officia.</p>

                <ul class="mt-10">
                    <li>Location: <span class="font-bold">Bijayapur, Dharan-14</span></li>
                    <li>Distance: <span class="font-bold">3 Kilometer from Dharan </span></li>
                    <li>Time: <span class="font-bold">10-15 Min from Vehicles</span></li>
                </ul>
            </div>
        </div>

         <!-- Namastee Waterfall -->
         <div class="lg:flex m-2">
            <img src="https://www.altitudehimalaya.com/wp-content/uploads/2020/09/tindhare.jpg" alt="" class="lg:w-1/2">
            <div class="text-left p-2">
                <h1 class="text-3xl mb-4">Namastee Jharna</h1>
                <p class="text-gray-600 font-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam consectetur quia expedita nesciunt similique cumque libero ea pariatur neque alias ratione, porro et, fugit cum assumenda saepe culpa nulla minima sit aut labore dolor deleniti sunt. Nemo adipisci alias voluptate delectus consequuntur suscipit magni illo voluptates deserunt? Nobis, distinctio officia.</p>

                <ul class="mt-10">
                    <li>Location: <span class="font-bold">Bijayapur, Dharan-14</span></li>
                    <li>Distance: <span class="font-bold">3 Kilometer from Dharan </span></li>
                    <li>Time: <span class="font-bold">10-15 Min from Vehicles</span></li>
                </ul>
            </div>
            
        </div>
    </div>
    <!-- Sightseens Ends -->

    <!-- Events -->
    <div class="mt-10 text-center">
        <h1 class="text-4xl mt-10 font-bold">EVENTS</h1>
        <p class="text-gray-600"> 
            Recent News and Events
        </p>

        <!-- Events Card -->
        <div class="lg:flex justify-between">
            <!-- Namastee Jharna -->
            <div class="lg:w-1/2 lg:h-64 bg-gray-100 m-2 lg:flex">
                <img src="https://images.pexels.com/photos/5272925/pexels-photo-5272925.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="lg:w-1/2">
                <div class="p-2 text-left box-border">
                  <h1 class="text-xl">Visit Namastee Jharna</h1>
                  <p class="text-gray-600 font-light">Namaste Falls is located in Bhedetar village development committee of Dhankuta district. It is an attractive place for domestic tourists. The falls is about 80 meters high. Domestic tourists from Jhapa, Dhankuta, Morang and Sunsari visit this falls in large.</p>
                  <a href="" class="text-red-500 no-underline">CONTINUE READING</a>
                </div>
            </div>

            <!-- Paraglyding -->
            <div class="lg:w-1/2 lg:h-64 bg-gray-100 m-2 lg:flex">
              <img src="https://images.pexels.com/photos/2162689/pexels-photo-2162689.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="lg:w-1/2">
              <div class="p-2 text-left box-border">
                <h1 class="text-xl">Dharan sky adventure paragliding</h1>
                <p class="text-gray-600 font-light">Dharan sky adventure paragliding - Laxmi Sadak, Dharan-4, Dharan, Nepal 56700 - Rated 4.8 based on 1 Review "It's amazing to be parts of u awesome flight...</p>
                <a href="" class="text-red-500 no-underline">CONTINUE READING</a>
              </div>
          </div>
        </div>
    </div>
    <!-- Events Ends -->
</div>
<!-- Main Ends -->
@endsection