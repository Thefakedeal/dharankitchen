@extends('admin.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header">Details</div>
                <div class="card-body">
                    <form action="{{ route('checkin.store') }}" method="post">
                        @csrf
                        {{-- Row 1 --}}
                        <div class="row">
                            <div class="col-md-6">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">{{ __('Email (optional)') }}</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Row 1 --}}

                        {{-- Row 2 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">{{ __('Mobile') }}</label>
                                    <input id="mobile" type="tel" minlength="10"
                                        class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                        value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="guests">{{ __('No. of Guests') }}</label>
                                    <input id="guests" type="number"
                                        class="form-control @error('guests') is-invalid @enderror" name="guests"
                                        value="{{ old('guests') }}" required autocomplete="guests" autofocus>
                                    @error('guests')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Row 2 --}}

                        {{-- Row 3 --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="room_type_id">{{ __('Room Type') }}</label>
                                    <select name="room_type_id" id="room_type_id"
                                        class="form-control @error('room_type_id') is-invalid @enderror">
                                        @foreach ($roomtypes as $roomtype)
                                            <option value="{{ $roomtype->id }}"> {{ $roomtype->name }} </option>
                                        @endforeach
                                    </select>
                                    @error('room_type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="totalrooms">{{ __('No. of Rooms') }}</label>
                                    <input id="totalrooms" type="number" min="1"
                                        class="form-control @error('totalrooms') is-invalid @enderror" name="totalrooms"
                                        value="{{ old('totalrooms') }}" required autocomplete="totalrooms" autofocus>
                                    @error('totalrooms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="checkin">{{ __('Check In') }}</label>
                                    <input id="checkin" type="date"
                                        class="form-control @error('checkin') is-invalid @enderror" name="checkin"
                                        value="{{ old('checkin')??now()->toDateString() }}" required autocomplete="checkin" autofocus>
                                    @error('checkin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- End Row 3 --}}
                        {{-- Row 4 --}}
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="checkin">{{ __('Check In') }}</label>
                                    <input id="checkin" type="date"
                                        class="form-control @error('checkin') is-invalid @enderror" name="checkin"
                                        value="{{ old('checkin') }}" required autocomplete="checkin" autofocus>
                                    @error('checkin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="checkout">{{ __('Check Out') }}</label>
                                    <input id="checkout" type="date"
                                        class="form-control @error('checkout') is-invalid @enderror" name="checkout"
                                        value="{{ old('checkout') }}" autocomplete="checkout" autofocus>
                                    @error('checkout')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div> --}}
                        {{-- End Row 4 --}}
                        {{-- Row 5 --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="details">Details</label>
                                    <textarea name="details" id="details" class="form-control" rows="5">
                                    {{ old('details') }} </textarea>
                                </div>
                            </div>
                        </div>
                        {{-- End Row 5 --}}
                        <button type="submit" class="btn btn-primary float-right">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
