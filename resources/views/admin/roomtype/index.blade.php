@extends('admin.admin')

@section('content')
    <div class="row justify-content-center py-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Room List</strong></div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered" id='datatable'>
                        <thead class="bg-dark">
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
                                Dis(%)
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
                                    NRs {{ number_format($roomtype->price) }}.00
                                </td>
                                <td> 
                                    {{ $roomtype->discount }}%
                                </td>
                                <td>
                                    NRs {{ number_format($roomtype->room_charge) }}.00
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
