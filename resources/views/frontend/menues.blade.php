@extends('frontend.templates.app')

@section('main')
    <div class="container text-center">
        <h1 class="display-5"> <i class="fa fa-hamburger"></i> Digital Menu(s)</h1>
        <hr>
        @foreach ($categories as $category)
            <h5 class="fs-4 bg-dark text-white">{{ $category->name }}</h5>
            @foreach ($category->menues as $menu)
                <div class="row fs-5 fw-light">
                    <div class="col pt-1">{{ $menu->name }}</div>
                    <div class="col pt-1">NRs {{ $menu->price }}</div>
                </div>
            @endforeach
        @endforeach
    </div>
@endsection
