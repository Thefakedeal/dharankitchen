@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <strong>Add Room</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('roomtype.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- Full Name --}}
                        <div class="form-group">
                            <label for="name">{{ __('Room Type') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" placeholder="Deluxe (3x)" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        {{-- Second Row --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="beds">Room Capacity</label>
                                    <input type="number" class="form-control" placeholder="Number of guests (eg. 3)" name="beds" min="1" value="{{ old('beds') }}"
                                        id="beds">
                                    @error('beds')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="avaibable">Number of Room(s) Available</label>
                                    <input type="number" class="form-control @error('available_rooms') is-invalid @enderror" name="available" min="0" value="0"
                                        id="avaibable">
                                    @error('available_rooms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <label for="" class="font-bold">Amenities</label>
                        {{-- Row Three --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="ac">AC</label>
                                    <select name="ac" id='ac' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="fridge">Fridge</label>
                                    <select name="fridge" id='fridge' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="pickup">Pick Up Service</label>
                                    <select name="pickup" id='pickup' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="hot_cold_shower">Hot & Cold Shower</label>
                                    <select name="hot_cold_shower" id='hot_cold_shower' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="wifi">Wifi</label>
                                    <select name="wifi" id='wifi' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        {{-- Row Four --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="wardrobe">Wardrobe</label>
                                    <select name="wardrobe" id='wardrobe' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="sofa">Sofa</label>
                                    <select name="sofa" id='sofa' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="tv">T.V.</label>
                                    <select name="tv" id='tv' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="bottled_water">Bottled Water</label>
                                    <select name="bottled_water" id='bottled_water' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="parking">Parking</label>
                                    <select name="parking" id='parking' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="hot_drinking_water">Hot Drinking Water</label>
                                    <select name="hot_drinking_water" id='hot_drinking_water' class="form-control">
                                        <option value=0>Not Available</option>
                                        <option value=1>Available</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Row Five --}}
                        <div class="row">
                           
                            
                        </div>
                       
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="price">Room Price (NRs.)</label>
                                    <input type="number" class="form-control" placeholder="eg. 4000 " name="price" value="{{ old('price') }}" id="price"
                                        min="1" required>
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="discount">Discount(%) </label>
                                    <input type="number" class="form-control" placeholder="eg. 10" name="discount" value="{{ old('discount') }}" id="discount"
                                        min="0" max="100">
                                    @error('discount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Room Description (optional)</label>
                            <textarea name="description" class="form-control" rows="5"></textarea>
                            @error('discription')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" name="images[]" accept="image/*" multiple>
                        </div>
                        <button type="submit" class="btn btn-success float-right ml-2">
                            <i class="fa fa-save"></i> Save
                        </button>
                        <button type="reset" class="btn btn-primary float-right">
                            <i class="fa fa-undo"></i> Reset
                        </button>
                        
                    </form>
                </div>

            </div>
        </div>
      
    </div>
@endsection
