@extends('admin.admin')

@section('content')
    <div class="row pt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    <strong>Add Gallery</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name"
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

            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    <strong>Gallery List</strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <th>
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $index=>$gallery)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $gallery->name }}
                                    </td>
                                    <td>
                                        <form action="{{ route('gallery.destroy',$gallery->id) }}" method="post" onsubmit="return confirm('Are You Sure You Want To Delete?')">
                                            <a href="{{ route('gallery.edit', $gallery->id) }}"
                                                class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-pen"></i> Edit
                                            </a>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    </div>
@endsection
