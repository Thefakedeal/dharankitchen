@extends('frontend.templates.app')

@section('main')
    <div class="container mx-auto mt-10">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong> <i class="fas fa-info-circle"></i> Enter you details</strong>
                    </div>
                    <div class="card-body">
                        <p class="text-gray-700">We will use these details to share your booking information</p>
        
                        <form action="" method="post">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="font-bold">Full Name</label>
                                        <input id="name" class="form-control" type="text" name="name" placeholder="Enter first and last name">
                                    </div>
                                </div>
        
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email" class="font-bold">Email</label>
                                        <input id="email" class="form-control" type="email" name="email" placeholder="name@domain.com">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="checkin" class="font-bold">Check in</label>
                                        <input id="checkin" class="form-control" type="date" name="checkin">
                                    </div>
                                </div>
        
                                <div class="col">
                                    <div class="form-group">
                                        <label for="checkout" class="font-bold">Check out</label>
                                        <input id="checkout" class="form-control" type="date" name="checkout">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="guest" class="font-bold">No of guests</label>
                                        <select id="guest" class="form-control" name="guests">
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
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="mobile" class="font-bold">Mobile Number</label>
                                        <input id="mobile" class="form-control" type="number" name="mobile" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col">
                                    <label for=""></label>
                                   <button type="submit" class="btn btn-primary form-control" >Send Passcode</button>
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
                                <h5>Deluxe Double Room</h5>
                                <p class="font-bold text-sm">1 Night</p>
                            </div>
                            <div class="col-md-2">
                                <img src="https://images.pexels.com/photos/3659683/pexels-photo-3659683.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" width="60" height="60">
                            </div>
                        </div>

                        <p><span class="font-semibold text-sm">Fri,8 Jan - Wed,12 Jan </span></p>
                        <hr>
                        <p>Deluxe(2x)</p>

                        <table class="table table-sm table-borderless">
                            <tr>
                                <td class="text-gray-600 text-sm">Room price for 5 Nights X 1 Guest </td>
                                <td class="text-gray-600 text-sm">NRP2500</td>
                            </tr>
                            <tr>
                                <td class="text-gray-600 text-sm">Price Drop </td>
                                <td class="text-gray-600 text-sm">-NPR500</td>
                            </tr>
                            <tr>
                                <td class="text-gray-600 text-sm">25% Coupon Discount </td>
                                <td class="text-gray-600 text-sm">-NPR500</td>
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
                                    NRS2000
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection