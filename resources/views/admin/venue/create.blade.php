@extends('admin.admin')

@section('content')
    <div class="row justify-content-center pt-4">
        <div class="col-md-6 ">
            <div class="card shadow">
                <div class="card-header">
                    Add Venue
                </div>
                <div class="card-body">
                    <form action="{{ route('venue.store') }}" method="post">
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
                        <button type="submit" class="btn btn-primary float-right">
                           <i class="fa fa-save"></i> Save
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">Venues</div>
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
                        @foreach ($venues as $index => $venue)
                            <tr>
                                <td>
                                    {{ ++$index }}
                                </td>
                                <td>
                                    {{ $venue->name }}
                                </td>
                                <td>
                                    <form action="{{ route('venue.destroy', $venue->id) }}" method="post"
                                        onsubmit="return confirm('Are You Sure You Want To Delete {{ $venue->name }} ?')">
                                        <a href="{{ route('venue.edit', $venue->id) }}"
                                            title="Edit {{ $venue->name }}" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-pen"></i> Edit
                                        </a>
                                        {{-- @csrf
                                        @method('delete') --}}
                                        {{-- <button type="submit" class="btn btn-danger btn-sm ml-2" title="Delete {{ $venue->name }}">
                                            <i class="fas fa-trash"></i>
                                        </button> --}}
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
