@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Update Category
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ $category->name }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Update Category
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">Categories</div>
                <table class="table tamle-sm ">
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
                    @foreach ($categories as $index => $category)
                        <tr>
                            <td>
                                {{ ++$index }}
                            </td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>

                                <form action="{{ route('category.destroy', $category->id) }}" method="post" onsubmit="return confirm('Are You Sure You Want To Delete {{ $category->name }} ?')">
                                    <a href="{{ route('category.edit', $category->id) }}" title="Edit {{ $category->name }}">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger ml-2" title="Delete {{ $category->name }}" >
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
