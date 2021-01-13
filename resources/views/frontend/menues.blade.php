@extends('frontend.templates.app')

@section('main')
    <div class="container mx-auto bg-gray-800 text-white">
        <h5 class="text-center pt-2 pb-2"><span class="fa fa-hamburger"></span> Digital Menu(s)</h5>
        @foreach ($categories as $category)
            <div class="mt-2 pb-2">
                <div class="bg-blue-900">
                    <h1 class="text-xl text-center text-white">{{ $category->name }}</h1>
                </div>
                @foreach ($category->menues as $menu)
                    
                        <div class="flex justify-content-between text-left font-serif px-2">
                            <div class="text-left text-white">{{ $menu->name }}</div>
                            <div class="text-rigth text-white">NRs {{ $menu->price }}.00</div>
                        </div>
                    <hr>
                @endforeach
            </div>
     
        @endforeach
    
    </div>
@endsection
