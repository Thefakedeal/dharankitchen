@extends('frontend.templates.app')

@section('main')
    <div class="container text-right">
        <h1 class="display-5"> <i class="fa fa-hamburger"></i> Digital Menu(s)</h1>
        <hr>
        @foreach ($categories as $category)
            <h5 class="fs-4 bg-dark text-white mt-2"> &nbsp;{{ $category->name }}</h5>
            @foreach ($category->menues as $menu)
                <div class="row fs-5 fw-light">
                    <div class="col-10 pt-1 fs-6 fw-bold">{{ $menu->name }} {!! $menu->description != null ? "<br> <small class='fs-6 fw-light'><em>$menu->description</em></small>" : '' !!}</div>
                    <div class="col-2 pt-1 fs-6"><strong>{{ $menu->price }}</strong></div>
                </div>
                <hr>
            @endforeach
        @endforeach
        
        <hr>
        <strong>#Note</strong>
        <p><strong>13% vat will be extra in bill</strong></p>
        <p>
            <ul>
                <li>Time Required for Momo and Tandoori Items is 20-30 minutes.</li>
                <li>Last Order for Dinner is 9.30 P.M in Summer and 9.00 P.M in Winter.</li>
                <li>Bringing Drinks and Food from outside is STRICTLY PROHIBITED.</li>
                <li>Order once given Shall NOT be Cancelled.</li>
            </ul>
        </p>
    </div>
@endsection
