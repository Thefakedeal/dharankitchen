@extends('frontend.templates.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.css">
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.gallerys').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled: true
                }
            });
        });

    </script>
@endsection

@section('main')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-center">{{ $gallery->name }}</h2>
                    <center>
                        <hr class="w-25">
                    </center>
                </div>
            </div>
            <div class="row p-4 gallerys">
                @foreach ($gallery->images as $image)
                    <div class="col-lg-3">
                        <a href="{{ asset($image->image) }}"><img src="{{ asset($image->image) }}" class="img-fluid"
                                alt=""></a>
                    </div>
                @endforeach

                {{-- <div class="col-lg-3">
                    <a href="/img/img-1.jpg"><img src="/img/img-1.jpg" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-3">
                    <a href="/img/img-6.jpg"><img src="/img/img-6.jpg" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-3">
                    <a href="/img/img-3.jpg"><img src="/img/img-3.jpg" class="img-fluid" alt=""></a>
                </div>
                <div class="col-lg-3">
                    <a href="/img/img-4.jpg"><img src="/img/img-4.jpg" class="img-fluid" alt=""></a>
                </div> --}}
            </div>
        </div>
    </main>
@endsection
