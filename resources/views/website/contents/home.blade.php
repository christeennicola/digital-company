@extends('layouts.website.master')

@section('main_content')
    <!-- Start Banner -->
    <!DOCTYPE html>
    <html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <head>
    </head>

    <body>
        <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="1s">
                                    <h6>{{ __('messages.welcome') }}</h6>
                                    <h2>{{ __('messages.we_make') }} <em>{{ __('messages.digital_ideas') }}</em> &amp;
                                        <span>{{ __('messages.seo') }}</span> {{ __('messages.marketing') }}
                                    </h2>
                                    <p>{{ __('messages.space_dynamic') }} <a rel="nofollow"
                                            href="https://templatemo.com/page/1"
                                            target="_parent">{{ __('messages.template') }}</a>.</p>
                                    <form id="search" action="#" method="GET">
                                        <fieldset>
                                            <input type="address" name="address" class="email"
                                                placeholder="{{ __('messages.your_website') }}" autocomplete="on" required>
                                        </fieldset>
                                        <fieldset>
                                            <button type="submit"
                                                class="main-button">{{ __('messages.analyze') }}</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <img src="{{ asset('assets/images/banner-right-image.png') }}" alt="team meeting">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <!-- End Banner -->
@endsection
<script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>

<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('8f5c64f62a8bc9265d87', {
        cluster: 'mt1'
    });

    var channel = pusher.subscribe('test');
    channel.bind('job.applied', function(data) {
        alert(JSON.stringify(data));
    });
</script>
