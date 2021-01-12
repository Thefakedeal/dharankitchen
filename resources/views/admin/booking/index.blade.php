@extends('admin.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    Booking List
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <th>
                                S.N
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Contact
                            </th>
                            <th>
                                Room Type
                            </th>
                            <th>
                                Guests
                            </th>
                            <th>
                                Rooms
                            </th>
                            <th>
                                Total
                            </th>
                            <th>
                                Confirmed
                            </th>
                            <th>
                                Paid
                            </th>
                            <th>
                                Check In 
                            </th>
                            <th>
                                Check Out
                            </th>
                            <th>
                                Requested
                            </th>
                            <th>
                                Action
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $index=>$booking)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $booking->name }}
                                    </td>
                                    <td>
                                        {{ $booking->mobile }}
                                    </td>
                                    <td>
                                        {{ $booking->roomtype->name??'' }}
                                    </td>
                                    <td>
                                        {{ $booking->guests }}
                                    </td>
                                    <td>
                                        {{ $booking->totalroom }}
                                    </td>
                                    <td>
                                        {{ $booking->total }}
                                    </td>
                                    <td>
                                        {{ $booking->confirmed==0?'No':'Yes' }}
                                    </td>
                                    <td>
                                        {{ $booking->paid==0?'No':'Yes' }}
                                    </td>
                                    <td>
                                        {{ $booking->checkin }}
                                    </td>
                                    <td>
                                        {{ $booking->checkout }}
                                    </td>
                                    <td>
                                        {{ $booking->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.booking.confirm') }}" onsubmit="return confirm('Do You Want To Confirm This Booking?')" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $booking->id }}">
                                            <button  type='submit' class="btn btn-link">
                                                Confirm
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $bookings->render('pagination::bootstrap-4') }}
                </div>
            </div>

        </div>
    </div>
@endsection