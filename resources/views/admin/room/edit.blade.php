@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Update Room
                </div>
                <div class="card-body">
                    <form action="{{ route('room.update',$room->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="room_code">Room Code</label>
                            <input type="text" class="form-control" name="room_code" value="{{ $room->room_code }}"
                                id="room_code" required>
                            @error('room_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="room_type">Room Type</label>
                            <select name="room_type_id" id='room_type' class="form-control" required>
                                @foreach ($roomtypes as $roomtype)
                                    <option value="{{ $roomtype->id }}" {{ $room->room_type_id?'selected':'' }}> {{ $roomtype->name }}</option>
                                @endforeach
                            </select>
                            @error('room_type_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="beds">No. Of Beds</label>
                            <input type="number" class="form-control" name="beds" min="1" value="{{ $room->beds }}"
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
                                <option value=0 {{ $room->ac==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->ac==1?'selected':'' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fridge">Fridge</label>
                            <select name="fridge" id='fridge' class="form-control">
                                <option value=0 {{ $room->fridge==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->fridge==1?'selected':'' }}>Available</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pickup">Pick Up</label>
                            <select name="pickup" id='pickup' class="form-control">
                                <option value=0 {{ $room->pickup==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->pickup==1?'selected':'' }}>Available</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="wardrobe">Wardrobe</label>
                            <select name="wardrobe" id='wardrobe' class="form-control">
                                <option value=0 {{ $room->wardrobe==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->wardrobe==1?'selected':'' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sofa">Sofa</label>
                            <select name="sofa" id='sofa' class="form-control">
                                <option value=0 {{ $room->sofa==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->sofa==1?'selected':'' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tv">T.V.</label>
                            <select name="tv" id='tv' class="form-control">
                                <option value=0 {{ $room->tv==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->tv==1?'selected':'' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="hot_cold_shower">Hot & Cold Shower</label>
                            <select name="hot_cold_shower" id='hot_cold_shower' class="form-control">
                                <option value=0 {{ $room->hot_cold_shower==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->hot_cold_shower==1?'selected':'' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="wifi">Wifi</label>
                            <select name="wifi" id='wifi' class="form-control">
                                <option value=0 {{ $room->wifi==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->wifi==1?'selected':'' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bottled_water">Bottled Water</label>
                            <select name="bottled_water" id='bottled_water' class="form-control">
                                <option value=0 {{ $room->bottled_water==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->bottled_water==1?'selected':'' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="offer">Offer</label>
                            <select name="offer" id='offer' class="form-control">
                                <option value=0 {{ $room->offer==0?'selected':'' }}>Not Available</option>
                                <option value=1 {{ $room->offer==1?'selected':'' }}>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" value="{{ $room->price }}" id="price"
                                min="1" required>
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="discount">Discount % </label>
                            <input type="number" class="form-control" name="discount" value="{{ $room->discount }}" id="discount"
                                min="0" max="100" required>
                            @error('discount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="5"> {{ $room->description }}</textarea>
                            @error('discription')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update Room</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Rooms
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <th>
                                S.N.
                            </th>
                            <th>
                                Code
                            </th>
                            <th>
                                Room Type
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Beds
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        @foreach ($rooms as $index=>$room)
                            <tr>
                                <td>
                                    {{ ++$index }}
                                </td>
                                <td>
                                    {{ $room->room_code }}
                                </td>
                                <td>
                                    {{ $room->room_type->name ?? '' }}
                                </td>
                                <td>
                                    {{ $room->price }}
                                </td>
                                <td>
                                    {{ $room->beds }}
                                </td>
                                <td>
                                    <form action="{{ route('room.destroy', $room->id) }}" method="post"
                                        onsubmit="return confirm('Are You Sure You Want To Delete {{ $room->name }} ?')">
                                        <a href="{{ route('room.edit', $room->id) }}" title="Edit {{ $room->code }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ml-2" title="Delete {{ $room->code }}">
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
@endsection
