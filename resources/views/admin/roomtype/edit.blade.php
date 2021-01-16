{{-- @extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Add Room Type
                </div>
                <div class="card-body">
                    <form action="{{ route('roomtype.update',$roomtype->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ $roomtype->name }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="avaibable">Available Rooms</label>
                            <input type="number" class="form-control @error('available_rooms') is-invalid @enderror" name="available" min="0" value="{{ $roomtype->available }}"
                                id="avaibable">
                            @error('available_rooms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="beds">No. Of Beds</label>
                            <input type="number" class="form-control" name="beds" min="1" value="{{ $roomtype->beds }}"
                                id="beds">
                            @error('beds')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ac">AC</label>
                            <select name="ac" id='ac' class="form-control">
                                <option value=0 {{ $roomtype->ac == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->ac == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fridge">Fridge</label>
                            <select name="fridge" id='fridge' class="form-control">
                                <option value=0 {{ $roomtype->fridge == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->fridge == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pickup">Pick Up</label>
                            <select name="pickup" id='pickup' class="form-control">
                                <option value=0 {{ $roomtype->pickup == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->pickup == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="wardrobe">Wardrobe</label>
                            <select name="wardrobe" id='wardrobe' class="form-control">
                                <option value=0 {{ $roomtype->wardrobe == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->wardrobe == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sofa">Sofa</label>
                            <select name="sofa" id='sofa' class="form-control">
                                <option value=0 {{ $roomtype->sofa == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->sofa == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tv">T.V.</label>
                            <select name="tv" id='tv' class="form-control">
                                <option value=0 {{ $roomtype->tv == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->tv == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="hot_cold_shower">Hot & Cold Shower</label>
                            <select name="hot_cold_shower" id='hot_cold_shower' class="form-control">
                                <option value=0 {{ $roomtype->hot_cold_shower == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->hot_cold_shower == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="wifi">Wifi</label>
                            <select name="wifi" id='wifi' class="form-control">
                                <option value=0 {{ $roomtype->wifi == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->wifi == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bottled_water">Bottled Water</label>
                            <select name="bottled_water" id='bottled_water' class="form-control">
                                <option value=0 {{ $roomtype->bottled_water == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->bottled_water == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="parking">Parking</label>
                            <select name="parking" id='parking' class="form-control">
                                <option value=0 {{ $roomtype->parking == 0 ? 'selected' : '' }}>Not Available</option>
                                <option value=1 {{ $roomtype->parking == 1 ? 'selected' : '' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $roomtype->price }}" id="price"
                                min="1" required>
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="discount">Discount % </label>
                            <input type="number" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ $roomtype->discount }}"
                                id="discount" min="0" max="100" required>
                            @error('discount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="5"> {{ $roomtype->description }}</textarea>
                            @error('discription')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" name="images[]" accept="image/*" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary">
                        Edit Type
                        </button>
                    </form>

                    <!-- Images -->   
                    <div class="row">
                        @foreach ($roomtype->images as $image)
                        <div class="col-sm-4 col-md-3 mt-2">
                            <!-- Button trigger modal -->
                            <img  src="{{ $image->image }}" class="image-fluid" style="width: 100%;height: 5rem; object-fit: cover; " data-toggle="modal"
                                data-target="#img{{ $image->id }}">
                            <!-- Modal -->
                            <div class="modal fade" id="img{{ $image->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img  src="{{ $image->image }}" class="image-fluid" style="max-width: 100%;height: auto;" data-toggle="modal">
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('image.delete') }}" onsubmit="return confirm('Do Ypu Want To Delete This Photo?')" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{ $image->id }}">
                                                <button type="submit" class="btn btn-danger">Delete Image</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End Images -->
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">Room Types</div>
                <div class="card-body">
                    <table class="table table-sm ">
                        <thead>
                            <th>
                                S.N
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        @foreach ($roomtypes as $index => $roomtype)
                            <tr>
                                <td>
                                    {{ ++$index }}
                                </td>
                                <td>
                                    {{ $roomtype->name }}
                                </td>
                                <td>
                                    <form action="{{ route('roomtype.destroy', $roomtype->id) }}" method="post"
                                        onsubmit="return confirm('Are You Sure You Want To Delete {{ $roomtype->name }} ?')">
                                        <a href="{{ route('roomtype.edit', $roomtype->id) }}"
                                            title="Edit {{ $roomtype->name }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ml-2" title="Delete {{ $roomtype->name }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <strong>Edit Room</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('roomtype.update',$roomtype->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        {{-- Full Name --}}
                        <div class="form-group">
                            <label for="name">{{ __('Room Type') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ $roomtype->name }}" required autocomplete="name" autofocus>
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
                                    <input type="number" class="form-control" name="beds" min="1" value="{{ $roomtype->beds }}"
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
                                    <input type="number" value="{{ $roomtype->available_rooms }}" class="form-control @error('available') is-invalid @enderror" name="available" min="0" value="0"
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
                                        <option value=0 {{ $roomtype->ac==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->ac==1?'selected':'' }} >Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="fridge">Fridge</label>
                                    <select name="fridge" id='fridge' class="form-control">
                                        <option value=0 {{ $roomtype->fridge==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->fridge==1?'selected':'' }}>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="pickup">Pick Up</label>
                                    <select name="pickup" id='pickup' class="form-control">
                                        <option value=0 {{ $roomtype->pickup==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->pickup==1?'selected':'' }}>Available</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="hot_cold_shower">Hot & Cold Shower</label>
                                    <select name="hot_cold_shower" id='hot_cold_shower' class="form-control">
                                        <option value=0 {{ $roomtype->hot_cold_shower==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->hot_cold_shower==1?'selected':'' }}>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="wifi">Wifi</label>
                                    <select name="wifi" id='wifi' class="form-control">
                                        <option value=0 {{ $roomtype->wifi==0?'selected':'' }} >Not Available</option>
                                        <option value=1 {{ $roomtype->wifi==1?'selected':'' }}>Available</option>
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
                                        <option value=0 {{ $roomtype->wardrobe==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->wardrobe==1?'selected':'' }}>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="sofa">Sofa</label>
                                    <select name="sofa" id='sofa' class="form-control">
                                        <option value=0 {{ $roomtype->sofa==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->sofa==1?'selected':'' }}>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="tv">T.V.</label>
                                    <select name="tv" id='tv' class="form-control">
                                        <option value=0 {{ $roomtype->tv==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->tv==1?'selected':'' }}>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="bottled_water">Bottled Water</label>
                                    <select name="bottled_water" id='bottled_water' class="form-control">
                                        <option value=0 {{ $roomtype->bottled_water==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->bottled_water==1?'selected':'' }}>Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="parking">Parking</label>
                                    <select name="parking" id='parking' class="form-control">
                                        <option value=0 {{ $roomtype->parking==0?'selected':'' }}>Not Available</option>
                                        <option value=1 {{ $roomtype->parking==1?'selected':'' }}>Available</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Row Five --}}
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="hot_drinking_water">Hot Drinking Water</label>
                                    <select name="hot_drinking_water" id='hot_drinking_water' class="form-control">
                                        <option value=0 @if($roomtype->hot_drinking_water==0) selected @endif>Not Available</option>
                                        <option value=1 @if($roomtype->hot_drinking_water==1) selected @endif>Available</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="price">Room Price (NRs.)</label>
                                    <input type="number" class="form-control" name="price" value="{{ $roomtype->price }}" id="price"
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
                                    <label for="discount">Discount(%)</label>
                                    <input type="number" class="form-control" name="discount" value="{{ $roomtype->discount }}" id="discount"
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
                            <textarea name="description" class="form-control" rows="5"> {{ $roomtype->description }}</textarea>
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
                            <i class="fa fa-sync-alt"></i> Update
                        </button>
                        
                    </form>
                </div>
<!-- Images -->   
<div class="row m-4">
    @foreach ($roomtype->images as $image)
    <div class="col-sm-3 col-md-2 mt-2">
        <!-- Button trigger modal -->
        <img  src="{{ $image->image }}" class="image-fluid" style="width: 100%;height: 5rem; object-fit: cover; " data-toggle="modal"
            data-target="#img{{ $image->id }}">
        <!-- Modal -->
        <div class="modal fade" id="img{{ $image->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img  src="{{ $image->image }}" class="image-fluid" style="max-width: 100%;height: auto;" data-toggle="modal">
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('room.image.delete') }}" onsubmit="return confirm('Do Ypu Want To Delete This Photo?')" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{ $image->id }}">
                            <button type="submit" class="btn btn-danger">Delete Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- End Images -->
            </div>
        </div>
          
    </div>
@endsection
