@extends('layouts.website.master')

@section('main_content')
    <!-- Start Contact Us -->
    <!DOCTYPE html>
    <html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <head>
    </head>

    <body>
        <div id="contact" class="contact-us section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                        <div class="section-heading">
                            <h2>{{ __('messages.feel_free') }}</h2>
                            <p>{{ __('messages.wether') }}</p>
                            <div class="phone-info">
                                <h4>{{ __('messages.for_any') }} <span><i class="fa fa-phone"></i> <a
                                            href="#">{{ __('messages.00') }}</a></span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">

                        <form id="contact" action="{{ route('user-contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="name" name="name" id="name"
                                            placeholder="{{ __('messages.name') }}" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="surname" name="surname" id="surname"
                                            placeholder="{{ __('messages.surname') }}" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="{{ __('messages.emaill') }}" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="{{ __('messages.message') }}"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit"
                                            class="main-button ">{{ __('messages.send_message') }}</button>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="contact-dec">
                                <img src="{{ asset('assets/images/contact-decoration.png') }}" alt="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <!-- End Contact Us -->
@endsection
