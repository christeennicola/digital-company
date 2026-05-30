@extends('layouts.website.master')

@section('main_content')
    <!-- Start Services -->
    <!DOCTYPE html>
    <html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <head>
    </head>

    <body>
        <div id="services" class="our-services section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="left-image">
                            <img src="{{ asset('assets/images/services-left-image.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="section-heading">
                            <h2>{{ __('messages.grow') }} <em>{{ __('messages.seo') }}</em> {{ __('messages.ser') }} &amp;
                                <span>{{ __('messages.project') }}</span> {{ __('messages.idea') }}
                            </h2>
                            <p>{{ __('messages.space_dyn') }}</p>
                        </div>
                        <div class="services-section">
                            <div class="container">
                                <div class="row" style="display: flex; flex-wrap: wrap;">
                                    @if ($services->count() > 0)
                                        @foreach ($services as $service)
                                            <div class="col-lg-4 col-md-6 mb-4" style="display: flex;">
                                                <div class="service-card"
                                                    style="
        background: #ff9800;
        padding: 40px 30px;
        /* هنا سر الشكل الجميل: قيمة كبيرة للـ radius تجعل الزوايا دائرية جداً */
        border-radius: 50px 20px 50px 20px;
        text-align: center;
        transition: all 0.4s ease;
        width: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 10px 10px 30px rgba(0,0,0,0.15);">

                                                    <div class="icon"
                                                        style="font-size: 50px; color: #fff; margin-bottom: 20px;">
                                                        <i class="{{ $service->icon }}"></i>
                                                    </div>

                                                    <h4
                                                        style="color: #fff; font-size: 22px; font-weight: 700; margin-bottom: 15px;">
                                                        {{ $service->title }}</h4>

                                                    <p
                                                        style="color: #fff; font-size: 15px; line-height: 25px; opacity: 0.9; flex-grow: 1;">
                                                        {{ $service->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12 text-center py-5">
                                            <p class="text-muted" style="font-size: 18px;"><i
                                                    class="bi bi-folder-x fs-1 d-block mb-3" style="color: #03a4ed;"></i> No
                                                {{ __('messages.no_service') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <!-- End Services -->
@endsection
