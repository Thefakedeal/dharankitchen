@extends('frontend.templates.app')

@section('main')
    @if (session('success'))
      <div class="alert alert-primary m-2">
          {{ session('success') }}
      </div>
    @endif
    <div class="container mx-auto mt-10">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong> <i class="fas fa-info-circle"></i> Enter you details</strong>
                    </div>
                    <div class="card-body">
                        <p class="text-gray-700">We will use these details to share your booking information</p>
        
                        <form action="{{ route('book') }}" onsubmit="return formValidate()" method="post">
                            @csrf
                            <input type="hidden" name="room_type_id" value="{{ $roomtype->id }}">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="font-bold">Full Name</label>
                                        <input id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter first and last name" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
        
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email" class="font-bold">Email</label>
                                        <input id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="name@domain.com" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="checkin" class="font-bold">Check in</label>
                                        <input id="checkin"  class="form-control @error('checkin') is-invalid @enderror" type="date" name="checkin" value="{{ now()->toDateString() }}" min="{{ now()->toDateString() }}" required>
                                        @error('checkin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
        
                                <div class="col">
                                    <div class="form-group">
                                        <label for="checkout" class="font-bold">Check out</label>
                                        <input id="checkout" class="form-control @error('checkout') is-invalid @enderror" type="date" name="checkout" value="{{ now()->addDays(1)->toDateString() }}" min="{{ now()->addDays(1)->toDateString() }}" required>
                                        @error('ckeckout')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="guest" class="font-bold">No of guests</label>
                                        <select id="guest" value="{{ old('guests') }}" class="form-control @error('guests') is-invalid @enderror" name="guests" required >
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10+">10+</option>
                                        </select>
                                        @error('guests')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="totalroom" class="font-bold">Total Room</label>
                                        <input id="totalroom" value="{{ old('totalroom') ?? 1 }}" class="form-control @error('totalroom')  is-invalid @enderror" type="number" value="1" min="1" max="{{ $roomtype->available_rooms }}" name="totalroom" placeholder="Total Room" required>
                                        @error('totalroom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="mobile" class="font-bold">Mobile Number</label>
                                        <input id="mobile" value="{{ old('mobile') }}" class="form-control @error('mobile') is-invalid @enderror" type="number" name="mobile" placeholder="Mobile Number" required>
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <label for=""></label>
                                   <button type="submit" id='submit' class="btn btn-primary form-control" >Send Passcode</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>{{ $roomtype->name }}</h5>
                                <p class="font-bold text-sm"><span id="nights"> 1 </span> Night</p>
                            </div>
                            <div class="col-md-2">
                                <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" width="60" height="60">
                            </div>
                        </div>

                        <p><span class="font-semibold text-sm"> <span id='checkindate'> Fri,8 Jan </span>  - <span id='checkoutdate'> Wed,12 Jan </span>  </span></p>
                        <hr>
                        <p>Deluxe(2x)</p>

                        <table class="table table-sm table-borderless">
                            <tr>
                                <td class="text-gray-600 text-sm">Room price for <span id="numofnights"> 1 </span> Nights X <span id="rooms"> 1 </span> Room(s) </td>
                                <td class="text-gray-600 text-sm"> NRS<span id="price"> {{ $roomtype->price }} </span></td>
                            </tr>
                            <tr>
                                <td class="text-gray-600 text-sm">Price Drop </td>
                                <td class="text-gray-600 text-sm" > -NRS<span id="discount"> {{ $roomtype->price - $roomtype->room_charge }} </span> </td>
                            </tr>
                        </table>

                        <hr>

                        <table class="table table-sm table-borderless">
                            <tr>
                                <td class="text-gray-600 text-xl">
                                    <div class="">
                                        Payable Amount
                                    </div>
                                    <div>
                                       <span class="text-sm text-gray-600"> inclusive of all taxes</span>
                                    </div>
                                </td>
                                <td class="text-gray-600 text-xl text-center">
                                    NRS<span id='payable'> {{ $roomtype->room_charge }} </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script>

        //HTML ELEMENTS
        const checkinelem = document.getElementById('checkin');
        const checkoutelem = document.getElementById('checkout');
        const nightsElem = document.getElementById('nights');
        const checkinDateElem = document.getElementById('checkindate')
        const checkoutDateElem = document.getElementById('checkoutdate')
        const numOfNightsElem = document.getElementById('numofnights');
        const priceElem = document.getElementById('price');
        const roomsDiv = document.getElementById('rooms');
        const totalRoomElem = document.getElementById('totalroom');
        const discountElem = document.getElementById('discount');
        const payableElem = document.getElementById('payable');
        const submit = document.getElementById('submit');
        //Values
        const available_rooms = {{ $roomtype->available_rooms }}
        const price = {{ $roomtype->price }}
        const discount= {{ $roomtype->price - $roomtype->room_charge }}
        const charge = {{ $roomtype->room_charge }}

        //EVENTS 
        document.onload = changePricing();

        checkoutelem.addEventListener('change',(e)=>{
            changePricing();
        })
        checkinelem.addEventListener('change',(e)=>{
            changePricing();
        })
        totalRoomElem.addEventListener('change',(e)=>{
            changePricing();
        })

        //Function 

        //Changes Value Of An Element
        function displayValue(value, element){
            element.innerText = value;
        }

        //Form Validation
        function formValidate(){
            const checkindate = new Date(checkinelem.value);
            const checkoutdate = new Date(checkoutelem.value);
            const totalRooms = parseInt(totalRoomElem.value);
            if(checkindate >= checkoutdate || totalRooms<1 || available_rooms<totalRooms){
                return false;
            }
        }
        
        //Updates Date & Prices in DOM and Disables the  submit button
        function changePricing(){
            submit.disabled = false;
            const checkindate = new Date(checkinelem.value);
            const checkoutdate = new Date(checkoutelem.value);
            const totalRooms = parseInt(totalRoomElem.value);
            if(checkindate >= checkoutdate || available_rooms<totalRooms){
                submit.disabled = true;
                return false;
            }
            const diff = checkoutdate - checkindate;
            const nights = diff / (1000*60*60*24);
            displayValue(checkindate.toDateString(),checkinDateElem)
            displayValue(checkoutdate.toDateString(),checkoutDateElem)
            displayValue(price*nights*totalRooms, priceElem)
            displayValue(discount*nights*totalRooms, discountElem)
            displayValue(charge*nights*totalRooms, payableElem)
            displayValue(totalRooms,roomsDiv)
            displayValue(nights,numOfNightsElem)
            displayValue(nights, nightsElem);
        }

    </script>
@endsection 