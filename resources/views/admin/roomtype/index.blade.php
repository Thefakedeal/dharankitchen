@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
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
                                Beds
                            </th>
                            <th>
                                Available Rooms
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Discount 
                            </th>
                            <th>
                                Charge
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        @foreach ($roomtypes as $index => $roomtype)
                            <tr>
                                <td>
                                    {{ ++$index }}
                                </td>
                                <td>
                                    {{ $roomtype->name }}
                                </td>
                                <td>
                                    {{ $roomtype->beds }}
                                </td>
                                <td>
                                    {{ $roomtype->available_rooms }}
                                </td>
                                <td>
                                    {{ $roomtype->price }}
                                </td>
                                <td> 
                                    {{ $roomtype->discount }} %
                                </td>
                                <td>
                                    {{ $roomtype->room_charge }}
                                </td>
                                <td>
                                    <form action="{{ route('roomtype.destroy', $roomtype->id) }}" method="post"
                                        onsubmit="return confirm('Are You Sure You Want To Delete {{ $roomtype->name }} ?')">
                                        <a href="{{ route('roomtype.edit', $roomtype->id) }}"
                                            title="Edit {{ $roomtype->name }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-pen"></i> Edit
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm ml-2" title="Delete {{ $roomtype->name }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $roomtypes->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
