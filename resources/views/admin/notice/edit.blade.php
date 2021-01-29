@extends('admin.admin')

@section('content')
    <div class="row pt-2">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Notice</strong>
                </div>
                <div class="card-body">
                    @if ($notice->image)
                        <img src="{{ $notice->image }}" alt="..." class="img-fluid">
                    @endif
                    <form action="{{ route('notice.update',$notice->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ $notice->title }}" required
                                autocomplete="title" autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>(
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="visible">Visibility</label>
                            <select name="show" id='visible' class="form-control">
                                <option value=0 @if(!$notice->show) selected @endif>Hidden</option>
                                <option value=1 @if($notice->show) selected @endif>Visible</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Description</label>
                            <textarea name="message" class="ckeditor form-control" rows="5" placeholder="Event Description"
                                required> {{ $notice->message }} </textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-success float-right ml-2">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
