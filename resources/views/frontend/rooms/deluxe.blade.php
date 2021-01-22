@extends('frontend.templates.app')

@section('carousel')
    <div class="row">
        <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="6500">

                <div class="carousel-inner" style="max-height: 60vh;">
                    @foreach ($images as $index=>$image)
                        <div class="carousel-item @if($index==0) active @endif " style="max-height: 60vh;">
                            <img src="{{ $image->image }}" class="d-block w-100" alt="..."
                                style="max-height: 60vh; object-fit: cover;">
                        </div>
                    @endforeach
                </div>

                {{-- <div class="carousel-inner" style="max-height: 60vh;">
                    <div class="carousel-item active" style="max-height: 60vh;">
                        <img src="https://cdn.pixabay.com/photo/2016/11/21/16/21/bed-1846251_1280.jpg" class="d-block w-100"
                            alt="..." style="max-height: 60vh; object-fit: cover;">

                    </div>
                    <div class="carousel-item" style="max-height: 60vh;">
                        <img src="https://cdn.pixabay.com/photo/2014/08/11/21/40/wall-416062_1280.jpg" class="d-block w-100"
                            alt="..." style="max-height: 60vh; object-fit: cover;">

                    </div>
                    <div class="carousel-item" style="max-height: 60vh;">
                        <img src="https://cdn.pixabay.com/photo/2014/08/11/21/40/wall-416062_1280.jpg" class="d-block w-100"
                            alt="..." style="max-height: 60vh; object-fit: cover;">

                    </div>
                </div> --}}
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
@endsection

@section('main')
    <main>
        <!-- Welcome Section -->
        <div class="py-5" style="background: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase">Deluxe<span class="text-danger"> Room</span></h1>
                        <p>We offer deluxe room with king size bed and well equipped with all the facilities and equipments
                            you need for a comfortable stay. Spend quality time in our room fulfilled with a luxurious
                            bathroom along with view of mountains and city. Spend your leisure time and make your stay a
                            memorable stay. Feel like home and away in a silent environment.</p>


                    </div>

                </div>
            </div>
        </div>
        <!-- End -->

        <!-- Facilities -->
        <div class="py-5" style="background:#FEF9FF;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h4 class="text-uppercase text-center">Room Facilities</h4>
                    </div>
                </div>

                <div class="row text-start mt-4">
                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/air-condition.png') }}" alt="" width="32"><span> Air Condition </span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/fridge.png') }}" alt="" width="32"><span> Fridge </span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/slipper.png') }}" alt="" width="32"><span> Slippers</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/phone.png') }}" alt="" width="32"><span> Wakeup Call</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/Hair-driyer.png') }}" alt="" width="32"><span> Hair Dryer</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/bathhub.png') }}" alt="" width="32"><span> Bathtub</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/toilettries.png') }}" alt="" width="32"><span> Toiletries</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/attached-bathroom.png') }}" alt="" width="32"><span> Attached
                            Bathroom</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/ironboard.png') }}" alt="" width="32"><span> Iron plus board</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/safetylocker.png') }}" alt="" width="32"><span> Safety Locker</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/workdesk.png') }}" alt="" width="32"><span> Work Desk</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/dry-house-keeping.png') }}" alt="" width="32"><span> Daily
                            Housekeeping</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/tea-coffee-maker.png') }}" alt="" width="32"><span> Tea Coffee/Maker</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/high-speed-wifi.png') }}" alt="" width="32"><span> High Speed Wifi</span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/led-tv.png') }}" alt="" width="32"><span> Led TV </span>
                        <hr>
                    </div>



                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/hot-cold-water.png') }}" alt="" width="32"><span> 24 hr Hot & Cold Water
                        </span>
                        <hr>
                    </div>

                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/room-service.png') }}" alt="" width="32"><span> 24 hr room service </span>
                        <hr>
                    </div>
                    <div class="col-md-3 py-2">
                        <img src="{{ asset('img/parking-area.png') }}" alt="" width="32"><span> Free Parking </span>
                        <hr>
                    </div>
                </div>
            </div>
        </div>


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
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ $roomtype->images->first()->image ?? '' }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $roomtype->name }}</h5>
                                        <p class="card-text">{{ Str::limit($roomtype->description, 100, $end = '...') }}</p>
                                        <p>
                                            <span class="fs-4 text-danger lead">NRS{{ $roomtype->room_charge }}</span>
                                            @if ($roomtype->discount > 0) <span
                                                    class="text-secondary text-decoration-line-through">NRS{{ $roomtype->price }}</span>
                                                <span class="text-danger">-{{ $roomtype->discount }}% Off</span>
                                            @endif
                                        </p>
                                        <a href="{{ route('room.profile', $roomtype->id) }}"
                                            class="link-danger text-decoration-none">Details <span
                                                class="fa fa-arrow-circle-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="row">
                        <!-- Deluxe (3x) -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="https://hotelhimalaya.com.np/images/subpackage/g0l1t-untitled-2.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Deluxe (3x)</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <p>
                                        <span class="fs-3 text-danger lead">NRS8000</span>
                                    </p>
                                    <a href="room.html" class="link-danger text-decoration-none">Details <span
                                            class="fa fa-arrow-circle-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Deluxe (2x) -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="https://hotelhimalaya.com.np/images/subpackage/g0l1t-untitled-2.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Deluxe (2x)</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <p>
                                        <span class="fs-3 text-danger lead">NRS5000</span> <span
                                            class="text-secondary text-decoration-line-through">NRS6000</span> <span
                                            class="text-danger">-20% off</span>
                                    </p>
                                    <a href="room.html" class="link-danger text-decoration-none">Details <span
                                            class="fa fa-arrow-circle-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Standard (3x) -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="https://hotelhimalaya.com.np/images/subpackage/g0l1t-untitled-2.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Standard (2x)</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <p>
                                        <span class="fs-3 text-danger lead">NRS3000</span>
                                    </p>
                                    <a href="room.html" class="link-danger text-decoration-none">Details <span
                                            class="fa fa-arrow-circle-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Normal (2x) -->
                        <div class="col-md-3">
                            <div class="card">
                                <img src="https://hotelhimalaya.com.np/images/subpackage/g0l1t-untitled-2.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Normal (3x)</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <p>
                                        <span class="fs-3 text-danger lead">NRS2500</span>
                                    </p>
                                    <a href="room.html" class="link-danger text-decoration-none">Details <span
                                            class="fa fa-arrow-circle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>

    </main>
@endsection
