@extends('frontend.templates.app')

@section('main')
    <div class="container mx-auto bg-gray-800 text-white">
        <form action="" method="post">
            <div class="row g-3 justify-content-center pt-2">
                <div class="col-auto">
                  <label for="search" class="col-form-label">Search</label>
                </div>
                <div class="col-auto">
                  <input type="text" id="search" class="form-control">
                </div>
                <div class="col-auto">
                    <button type="submit">Search</button>
                </div>
              </div>
        </form>
        <h5 class="text-center pt-2"><span class="fa fa-hamburger"></span> Menu(s)</h5>
        <hr>
        @foreach ($categories as $category)
            <div class="mt-2 pb-2">
                <div class="bg-green-300">
                    <h1 class="text-xl text-center text-black">{{ $category->name }}</h1>
                </div>
            
                @foreach ($menues as $menu)
                    @if ($menu->category->name == $category->name)
                    <div class="flex justify-content-between text-left font-serif p-2">
                        <div class="text-left mt-1 text-white">{{ $menu->name }}</div>
                        <div class="text-rigth mt-1 text-white">Rs {{ $menu->price }}</div>
                    </div>
                    @endif
                @endforeach
            </div>
            <hr>
        @endforeach
    
    </div>
@endsection
