@extends('admin.admin')

@section('content')
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    Room List
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <th>
                                S.N.
                            </th>
                            <th>
                                Room Number
                            </th>
                            <th>
                                Room Type
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        @foreach ($rooms as $index => $room)
                            <tr>
                                <td>
                                    {{ ++$index }}
                                </td>
                                <td>
                                    {{ $room->room_number }}
                                </td>
                                <td>
                                    {{ $room->room_type->name ?? '' }}
                                </td>
                                <td>
                                    <form action="{{ route('room.destroy', $room->id) }}" method="post"
                                        onsubmit="return confirm('Are You Sure You Want To Delete {{ $room->name }} ?')">
                                        <a href="{{ route('room.edit', $room->id) }}" title="Edit {{ $room->code }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ml-2" title="Delete {{ $room->code }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $rooms->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
