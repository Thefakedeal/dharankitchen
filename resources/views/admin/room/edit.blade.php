@extends('admin.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    Update Room
                </div>
                <div class="card-body">
                    <form action="{{ route('room.update', $room->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="room_number">Room Number</label>
                            <input type="text" class="form-control @error('room_number') is-invalid @enderror" name="room_number" value="{{ $room->room_number }}"
                                id="room_number" required>
                            @error("room_number")
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="room_type">Room Type</label>
                            <select name="room_type_id" id='room_type' class="form-control @error('room_type_id') is-invalid @enderror" required>
                                @foreach ($roomtypes as $roomtype)
                                    <option value="{{ $roomtype->id }}" {{ $room->room_type_id ? 'selected' : '' }}>
                                        {{ $roomtype->name }}</option>
                                @endforeach
                            </select>
                            @error('room_type_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                    </form>
                 
                   
                </div>
            </div>
        </div>
        {{-- <div class="col-md-6">
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
                                Room Number
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
                        @foreach ($rooms as $index => $room)
                            <tr>
                                <td>
                                    {{ ++$index }}
                                </td>
                                <td>
                                    {{ $room->room_number }}
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
        </div> --}}
    </div>
@endsection
