@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Add Menu
                </div>
                <div class="card-body">
                    <img src="{{ $menu->image }}" class="img-fluid" alt="">
                    <form action="{{ route('menu.update',$menu->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ $menu->name }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">{{ __('Price (Rs.)') }}</label>
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                                name="price" value="{{ $menu->price }}" required autocomplete="price" autofocus min="0">
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="venue">Venue</label>
                            <select id="venue" name="venue_id" class="form-control @error('venue_id') is-invalid @enderror"
                                required>
                                @foreach ($venues as $venue)
                                    <option value="{{ $venue->id }}" {{ $menu->venue_id==$venue->id?'selected':'' }}>
                                        {{ $venue->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('venue_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" name="category_id"
                                class="form-control @error('category_id') is-invalid @enderror" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $menu->category_id==$category->id?'selected':'' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" type="file" name="image" class="form-control" accept="image/*">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="5">  {{ $menu->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Update Menu
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">Menu Items</div>
                <table class="table tamle-sm ">
                    <thead>
                        <th>
                            S.N
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Venue
                        </th>
                        <th>
                            Actions
                        </th>
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
                                {{ $menu->category->name??" " }}
                            </td>
                            <td>
                                {{ $menu->venue->name??" " }}
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
@endsection
