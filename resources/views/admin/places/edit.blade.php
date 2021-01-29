@extends('admin.admin')

@section('content')
    <div class="row pt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Place</strong>
                </div>
                <div class="card-body">
                    <img src="{{ $place->image }}"  class='img-fluid' alt="">
                    <form action="{{ route('places.update',$place->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">{{ __('Title') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ $place->name }}" placeholder="Event Title" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>(
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="ckeditor form-control" rows="5" placeholder="Event Description" required> {{ $place->description }} </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" accept="image/*" multiple>
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
