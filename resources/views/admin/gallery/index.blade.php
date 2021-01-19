@extends('admin.admin')

@section('content')
    <div class="row pt-4">
        <div class="col-md-12">
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
                                        <form action="{{ route('gallery.destroy',$gallery->id) }}" method="post">
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
                    {{ $galleries->render('pagination::bootstrap-4') }}
                </div>                
            </div>
        </div>
    </div>
@endsection