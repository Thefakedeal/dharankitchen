@extends('admin.admin')

@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                   <strong> Update Venue </strong> 
                </div>
                <div class="card-body">
                    <form action="{{ route('venue.update', $venue->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ $venue->name }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary float-right">
                            <i class="fas fa-sync-alt"></i> Update
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                   <strong> Venues
                    </strong> 
                </div>
                <div class="card-body">
                    <table class="table table-sm ">
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
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger ml-2" title="Delete {{ $venue->name }}">
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
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    Menu
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </thead>
                            @foreach ($menues as $index => $menu)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $menu->name }}
                                    </td>
                                    <td>
                                        {{ $menu->price }}
                                    </td>
                                    <td>
                                        {{ $menu->category->name ?? '' }}
                                    </td>
                                    <td>
                                        <form action="{{ route('menu.destroy', $menu->id) }}" method="post"
                                            onsubmit="return confirm('Are You Sure You Want To Delete {{ $menu->name }} ?')">
                                            <a href="{{ route('menu.edit', $menu->id) }}"
                                                title="Edit {{ $menu->name }}">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger ml-2" title="Delete {{ $menu->name }}">
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
    </div> --}}
@endsection
