@extends('admin.admin')

@section('content')
    <div class="row justify-content-center py-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong> 
                        Check Ins
                    </strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead class="bg-dark">
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Room Type</th>
                            <th>Qty</th>
                            <th>Room(s)</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($checkins as $index=>$checkin)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $checkin->name }}
                                    </td>
                                    <td>
                                        {{ $checkin->mobile }}
                                    </td>
                                    <td>
                                        {{ $checkin->checkin }}
                                    </td>
                                    <td>
                                        {{ $checkin->checkout?$checkin->checkout:'N/A' }}
                                    </td>
                                    <td>
                                        {{ $checkin->room_type->name??'N/A' }}
                                    </td>
                                    <td>
                                        {{ $checkin->totalrooms }}
                                    </td>
                                    <td>
                                        {{ $checkin->details }}
                                    </td>
                                    <td>
                                        <form action="{{ route('checkin.checkout') }}" onsubmit="return confirm('Are You Sure You Want To Check Out?')" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $checkin->id }}">
                                            <button type="submit" class="btn btn-outline-primary" @if($checkin->checkout) disabled @endif >
                                                <i class="fas fa-sign-out-alt"></i> Check Out</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $checkins->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection