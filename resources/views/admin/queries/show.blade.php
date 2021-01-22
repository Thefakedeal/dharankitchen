@extends('admin.admin')

@section('content')
    <div class="row pt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2>
                       <strong> From: </strong>  {{ $query->name }}
                    </h2>
                    <h3>
                       <strong>  Email: </strong> {{ $query->email }}
                    </h3>
                    <h3>
                        <strong> Mobile: </strong> {{ $query->mobile }}
                    </h3>
                    <strong> Message: </strong>
                    <p>
                        {{ $query->message }}
                    </p>

                    <p class="py-4">
                        <a href="tel:{{ $query->mobile }}" class="btn btn-primary"><i class="fa fa-phone-alt"></i> Call Customer</a>
                        <a href="mailto:{{ $query->email }}" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Email</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection