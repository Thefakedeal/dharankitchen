@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Add Room Type
                </div>
                <div class="card-body">
                    <form action="{{ route('roomtype.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="beds">No. Of Beds</label>
                            <input type="number" class="form-control" name="beds" min="1" value="{{ old('beds') }}"
                                id="beds">
                            @error('beds')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="avaibable">Available Rooms</label>
                            <input type="number" class="form-control @error('available_rooms') is-invalid @enderror" name="available" min="0" value="0"
                                id="avaibable">
                            @error('available_rooms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ac">AC</label>
                            <select name="ac" id='ac' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fridge">Fridge</label>
                            <select name="fridge" id='fridge' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pickup">Pick Up</label>
                            <select name="pickup" id='pickup' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="wardrobe">Wardrobe</label>
                            <select name="wardrobe" id='wardrobe' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sofa">Sofa</label>
                            <select name="sofa" id='sofa' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tv">T.V.</label>
                            <select name="tv" id='tv' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="hot_cold_shower">Hot & Cold Shower</label>
                            <select name="hot_cold_shower" id='hot_cold_shower' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="wifi">Wifi</label>
                            <select name="wifi" id='wifi' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bottled_water">Bottled Water</label>
                            <select name="bottled_water" id='bottled_water' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="parking">Parking</label>
                            <select name="parking" id='parking' class="form-control">
                                <option value=0>Not Available</option>
                                <option value=1>Available</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" value="{{ old('price') }}" id="price"
                                min="1" required>
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="discount">Discount % </label>
                            <input type="number" class="form-control" name="discount" value="{{ old('discount') }}" id="discount"
                                min="0" max="100">
                            @error('discount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
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
                        <button type="submit" class="btn btn-primary">
                            Add Type
                        </button>
                    </form>
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
@endsection
