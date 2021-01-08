<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </head>
<body>
  <!-- Navigation Bar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dharan Kitchen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Overview</a></li>
              <li><a class="dropdown-item" href="#">Video Tour</a></li>
            </ul>
          </li>

           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Room
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">All Room</a></li>
              <li><a class="dropdown-item" href="#">Presidential Suite</a></li>
              <li><a class="dropdown-item" href="#">Executice Suite</a></li>
              <li><a class="dropdown-item" href="#">Junior Suite</a></li>
              <li><a class="dropdown-item" href="#">Super Deluxe</a></li>
              <li><a class="dropdown-item" href="#">Deluxe Room</a></li>
              <li><a class="dropdown-item" href="#">Superior Room</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Restaurant</a></li>
              <li><a class="dropdown-item" href="#">Sekuwa Corner</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Hotels</a></li>
            </ul>
          </li> -->
        </ul>
        <a href="" class="px-6 py-2 text-white rounded no-underline bg-gray-600 hover:bg-gray-700">Book</a>
        
      </div>
    </div>
  </nav>
  <!-- Navigation Bar End -->

   <!-- Carousel -->
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
  
    <script src="{{ asset('js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
            <div style="background-color:#d3890e;">
                <img data-u="image" style="opacity:0.8;" data-src="{{ asset('img/pb-beer-1513436-1600.jpg') }}" />
                <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
                    <div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">DHARAN</div>
                    <div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">DHARAN</div>
                    <div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">DHARAN</div>
                    <div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">DHARAN</div>
                    <div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">DHARAN</div>
                    <div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">KITCHEN</div>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="{{ asset('img/px-apartment-chairs-contemporary-2015560-1600.jpg') }}" />
                <div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:350px;top:360px;width:900px;height:500px;position:absolute;">
                        <svg viewbox="0 0 800 60" data-to="50% 50%" width="800" height="60" data-t="7" style="left:0px;top:-70px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:700;letter-spacing:0.05em;overflow:visible;">
                            <text fill="#454447" stroke="#ff9500" stroke-width="2" text-anchor="middle" x="400" y="60">WELCOME
                            </text>
                        </svg>
                        <div data-to="50% 50%" data-t="8" style="filter:url('#jssor_1_flt_1');left:200px;top:0px;width:600px;height:60px;position:absolute;opacity:0;color:#C49D8F;font-family:Roboto Condensed, sans-serif;font-size:48px;line-height:1.2;letter-spacing:0.1em;text-align:center;">WE GIVE LUXURIEX SERVICE</div>
                        <svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:250px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:100px;font-weight:900;letter-spacing:0.5em;overflow:visible;">
                            <text fill="rgba(255,255,255,0.7)" stroke="#ff9500" text-anchor="middle" x="400" y="100">DHARAN KITCHEN
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="{{ asset('img/px-back-view-boats-couple-2612852-1600.jpg') }}" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3" style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11" style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">GULF MEXICO
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">ENJOY SAILBOAT
                        </text>
                    </svg>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="{{ asset('img/yamamoto.jpg') }}" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="13" style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
                        <div style="left:94px;top:35px;width:480px;height:90px;position:absolute;color:rgba(74,217,205,0.5);font-family:'Roboto Condensed',sans-serif;font-size:72px;line-height:1.2;">CREATION</div>
                        <div style="left:307px;top:115px;width:400px;height:50px;position:absolute;color:rgba(74,217,205,0.5);font-family:'Roboto Condensed',sans-serif;font-size:42px;line-height:1.1;text-align:center;background-color:rgba(72,77,76,0.5);">for creative peoples</div>
                    </div>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="{{ asset('img/wine-1600.jpg') }}" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                    <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="{{ asset('img/wine-atlantic-ocean.png') }}" />
                    <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="{{ asset('img/wine-badge.png') }}" />
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->

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
                    <h1 class="font-medium text-xl">Arrival</h1>
                    <input type="date" name="" id="" class="p-2 w-60">
                </div>
                <div class="p-4">
                    <h1 class="text-xl">Depature</h1>
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
                </div>
            </a> --}}
            @foreach ($roomtypes as $roomtype)
            <a href="" class="no-underline text-gray-800 hover:text-gray-800">
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
            

            {{-- <a href="" class="no-underline text-gray-800 hover:text-gray-800">
                <div class="shadow-2xl h-auto">
                    <img src="https://images.pexels.com/photos/271643/pexels-photo-271643.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="h-48 w-full object-cover object-center">
                    <div class="p-2">
                        <h1 class="text-2xl mb-2 mt-2 font-weight-bold">Normal Room</h1>
                        <p class="font-light">Lorem ipsum dolor sit amet.</p>
                        <div class=" flex justify-between items-center">
                            <h3 class="text-red-500 mb-0 font-bold">NPR5000</h3>
                        </div>
                        <p class="font-light mt-0 text-sm">per room per night</p>
                    </div>
                </div>
            </a> --}}

            {{-- <a href="" class="no-underline text-gray-800 hover:text-gray-800">
                <div class="shadow-2xl h-auto">
                    <img src="https://images.pexels.com/photos/3754595/pexels-photo-3754595.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="h-48 w-full object-cover object-center">
                    <div class="p-2">
                        <h1 class="text-2xl mb-2 mt-2 font-weight-bold">Delux Triple Room</h1>
                        <p class="font-light">Lorem ipsum dolor sit amet.</p>
                        <div class=" flex justify-between items-center">
                            <h3 class="text-red-500 mb-0 font-bold">NPR5000</h3>
                            <p class="line-through text-sm">NPR7000</p>
                            <p class="text-red-500 text-sm">28% off</p>
                        </div>
                        <p class="font-light mt-0 text-sm">per room per night</p>
                    </div>
                </div>
            </a> --}}

            {{-- <a href="" class="no-underline text-gray-800 hover:text-gray-800">
                <div class="shadow-2xl h-auto">
                    <img src="https://images.pexels.com/photos/2029722/pexels-photo-2029722.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="h-48 w-full object-cover object-center">
                    <div class="p-2">
                        <h1 class="text-2xl mb-2 mt-2 font-weight-bold">Standard Room</h1>
                        <p class="font-light">Lorem ipsum dolor sit amet.</p>
                        <div class=" flex justify-between items-center">
                            <h3 class="text-red-500 mb-0 font-bold">NPR2200</h3>
                            <p class="line-through text-sm">NPR4500</p>
                            <p class="text-red-500 text-sm">28% off</p>
                        </div>
                        <p class="font-light mt-0 text-sm">per room per night</p>
                    </div>
                </div>
            </a> --}}

            
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

   <!-- Footer -->
   <footer class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl">Tailblocks</span>
        </a>
        <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
      </div>
      <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Second Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Third Link</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
          <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
   </footer>
   <!-- Footer Ends -->

</body>
</html>