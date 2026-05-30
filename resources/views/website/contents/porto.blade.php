@extends('layouts.website.master')

@section('main_content')
    <!-- Start Portofolio -->
    <!DOCTYPE html>
    <html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <head>
    </head>

    <body>
        <div id="portfolio" class="our-portfolio section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <h2>{{ __('messages.see_what') }} <em>{{ __('messages.offer') }}</em> &amp;
                                {{ __('messages.what_we') }} <span>{{ __('messages.provide') }}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        @if ($portos->count() > 0)
                            @foreach ($portos as $porto)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <a href="{{ $porto->link }}" class="portfolio-item-link">
                                        <div class="custom-portfolio-item">

                                            <img src="{{ asset('storage/' . $porto->image) }}" class="portfolio-img"
                                                alt="{{ $porto->title }}">

                                            <div class="portfolio-overlay">
                                                <div class="overlay-text">
                                                    <h4>{{ $porto->title }}</h4>
                                                    <i class="{{ $porto->icon }} fs-1 text-white"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12 text-center py-5">
                                <p class="text-muted" style="font-size: 18px;"><i class="bi bi-folder-x fs-1 d-block mb-3"
                                        style="color: #03a4ed;"></i> {{ __('messages.no_porto') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <!-- End Portofolio -->
@endsection
