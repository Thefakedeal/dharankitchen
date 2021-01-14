@extends('admin.admin')

@section('content')
    <div class="row justify-content-center pt-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <strong>Confirmed Bookings</strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm text-sm">
                        <thead>
                            <th>
                                S.N
                            </th>
                            <th>
                                Requested
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
                                Qty
                            </th>
                            <th>
                                Guests
                            </th>
                            <th>
                                Arrival
                            </th>
                            <th>
                                Departure
                            </th>
                            <th>
                                Amount
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Paid
                            </th>

                            <th>
                                Action
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $index => $booking)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $booking->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        {{ $booking->name }}
                                    </td>
                                    <td>
                                        {{ $booking->mobile }}
                                    </td>
                                    <td>
                                        {{ $booking->roomtype->name ?? '' }}
                                    </td>
                                    <td>
                                        {{ $booking->totalroom }}
                                    </td>
                                    <td>
                                        {{ $booking->guests }}
                                    </td>
                                    <td>
                                        {{ $booking->checkin }}
                                    </td>
                                    <td>
                                        {{ $booking->checkout }}
                                    </td>

                                    <td>
                                        NRs {{ $booking->total }}
                                    </td>
                                    <td>
                                        {{ $booking->confirmed == 0 ? 'Pending  ' : 'Comfirmed' }}
                                    </td>
                                    <td>
                                        {{ $booking->paid == 0 ? 'No' : 'Yes' }}
                                    </td>


                                    <td>
                                        <div class="row">
                                            <form action="{{ route('admin.booking.checkin') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $booking->id }}">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-sign-in-alt"></i>
                                                Check In
                                            </button>
                                            </form>
                                            <form action="{{ route('admin.booking.cancel') }}" onsubmit="return confirm('Do You Want To Cancel This Booking?')"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{ $booking->id }}">
                                                <button type='submit' title='cancel booking' class="btn btn-sm btn-danger">
                                                    <i class="fas fa-ban"></i>
                                                </button>
                                            </form>
                                        </div>

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
