@extends('admin.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card shadow">
                <div class="card-header">Category List</div>
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
                                            title="Edit {{ $category->name }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ml-2" title="Delete {{ $category->name }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $categories->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection