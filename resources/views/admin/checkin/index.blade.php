@extends('admin.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <strong> 
                        Check Ins
                    </strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Room Type</th>
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
                                        <form action="{{ route('checkin.checkout') }}" onsubmit="return confirm('Are You Sure You Want To Check Out?')" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $checkin->id }}">
                                            <button type="submit" class="btn btn-primary" @if($checkin->checkout) disabled @endif >Check Out</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection