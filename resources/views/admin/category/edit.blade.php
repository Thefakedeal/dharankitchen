@extends('admin.admin')

@section('content')
    <div class="row justify-content-center pt-4">
        <div class="col-md-6 ">
            <div class="card shadow">
                <div class="card-header">
                    <strong>Update Category</strong>
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
                        <button type="submit" class="btn btn-primary float-right">
                            <i class="fas fa-sync-alt"></i>
                            Update
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header"><strong>Categories</strong></div>
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
                        @foreach ($categories as $index => $category)
                            <tr>
                                <td>
                                    {{ ++$index }}
                                </td>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="post"
                                        onsubmit="return confirm('Are You Sure You Want To Delete {{ $category->name }} ?')">
                                        <a href="{{ route('category.edit', $category->id) }}"
                                            title="Edit {{ $category->name }}" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-pen"></i> Edit
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm ml-2" title="Delete {{ $category->name }}">
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
    </div>
@endsection
