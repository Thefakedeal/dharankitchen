@extends('admin.admin')

@section('content')
    <div class="row pt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Update Gallery</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('gallery.update',$gallery->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ $gallery->name }}" placeholder="Name" required autocomplete="name"
                                autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>(
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
                <!-- Images -->   
<div class="row m-4">
    @foreach ($gallery->images as $image)
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
                        <form action="{{ route('gallery.image.delete') }}" onsubmit="return confirm('Do Ypu Want To Delete This Photo?')" method="post">
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
