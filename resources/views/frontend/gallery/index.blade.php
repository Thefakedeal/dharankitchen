@extends('frontend.templates.app')

@section('main')
    <div class="container pt-4">
        <div class="row p-4">
            <h2>Gallery</h2>
            @foreach ($galleries as $gallery)
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3>{{ $gallery->name }}</h3>
                        <img src="{{ $gallery->images->first()->image ?? '' }}" alt="..." class="img-fluid">
                        <div class="pt-2 float-right">
                            <a href="{{ route('gallery',$gallery->id) }}" class="btn btn-danger float-right"> See More </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
