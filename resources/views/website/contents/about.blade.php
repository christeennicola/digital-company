@extends('layouts.website.master')

@section('main_content')
    <!-- Start About Us -->
    <!DOCTYPE html>
    <html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <head>
    </head>

    <body>
        <div id="about" class="about-us section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/images/about-left-image.png') }}" alt="person graphic">
                        </div>
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <div class="services">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/service-icon-01.png') }}" alt="reporting">
                                        </div>
                                        <div class="right-text">
                                            <h4>{{ __('messages.data_analyze') }}</h4>
                                            <p>{{ __('messages.about1') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/service-icon-02.png') }}" alt="">
                                        </div>
                                        <div class="right-text">
                                            <h4>{{ __('messages.data_reporting') }}</h4>
                                            <p>{{ __('messages.about2') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/service-icon-03.png') }}" alt="">
                                        </div>
                                        <div class="right-text">
                                            <h4>{{ __('messages.web_analytics') }}</h4>
                                            <p>{{ __('messages.about3') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/service-icon-04.png') }}" alt="">
                                        </div>
                                        <div class="right-text">
                                            <h4>{{ __('messages.seo_sug') }}</h4>
                                            <p>{{ __('messages.about4') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <!-- End About Us -->
@endsection
