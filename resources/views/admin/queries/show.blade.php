@extends('admin.admin')

@section('content')
    <div class="row pt-4">
        <div class="col">
            <div class="card shadow">
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
                </div>
            </div>
        </div>
    </div>
@endsection