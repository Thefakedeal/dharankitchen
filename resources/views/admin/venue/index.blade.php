@extends('admin.admin')

@section('content')
    <div class="row justify-content-center pt-4">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <strong> Venues
                    </strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead class="bg-dark">
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
                                        <a href="{{ route('venue.edit', $venue->id) }}" title="Edit {{ $venue->name }}"
                                            class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-pen"></i>
                                            Edit
                                        </a>
                                        {{-- @csrf
                                        @method('delete') --}}
                                        {{-- <button type="submit" class="btn btn-danger ml-2"
                                            title="Delete {{ $venue->name }}">
                                            <i class="fas fa-trash"></i>
                                        </button> --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $venues->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
