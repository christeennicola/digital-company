@extends('layouts.website.master')

@section('main_content')
    <!-- Start Blog -->
    <!DOCTYPE html>
    <html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <head>
    </head>

    <body>
        <div id="blog" class="our-blog section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                        <div class="section-heading">
                            <h2>{{ __('messages.check_out') }}<em>{{ __('messages.trending') }}</em>
                                {{ __('messages.in_our') }}
                                <span>{{ __('messages.new') }}</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                        <div class="top-dec">
                            <img src="{{ asset('assets/images/blog-dec.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div id="blog" class="blog-section section" style="padding: 80px 0; background-color: #f7fafd;">
                    <div class="container">

                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-8 text-center">
                                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <h6
                                        style="color: #03a4ed; text-transform: uppercase; font-weight: 700; font-size: 15px; letter-spacing: 1px; margin-bottom: 15px;">
                                        {{ __('messages.our_blog') }}</h6>
                                    <h4 style="font-size: 30px; font-weight: 700; color: #2a2a2a; line-height: 40px;">
                                        {{ __('messages.che') }}
                                        {{ __('messages.latest_news') }} <em
                                            style="font-style: normal; color: #03a4ed;">{{ __('messages.new') }}</em>
                                        {{ __('messages.art') }}</h4>
                                    <div class="line-dec"
                                        style="width: 50px; height: 3px; background-color: #03a4ed; margin: 20px auto 0 auto;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @if ($blogs->count() > 0)
                                @foreach ($blogs as $blog)
                                    <div class="col-lg-6 col-md-12 mb-5">
                                        <div class="blog-card"
                                            style="background: #ff7a00; border-radius: 24px; overflow: hidden; box-shadow: 0px 15px 35px rgba(255, 122, 0, 0.2); transition: all 0.4s ease; height: 100%; display: flex; flex-direction: column; border: none;">

                                            <div class="blog-img-container"
                                                style="position: relative; overflow: hidden; height: 340px;">
                                                <img src="{{ asset('storage/' . $blog->image) }}"
                                                    alt="{{ $blog->title }}"
                                                    style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">

                                                <div class="blog-date"
                                                    style="position: absolute; top: 20px; right: 20px; background: rgba(255, 255, 255, 0.95); color: #ff7a00; padding: 10px 20px; border-radius: 50px; font-size: 16px; font-weight: 700; box-shadow: 0 8px 20px rgba(0,0,0,0.15); border: 1px solid rgba(255, 122, 0, 0.1); display: flex; align-items: center; gap: 8px;">
                                                    <i class="bi bi-calendar3" style="font-size: 18px;"></i>
                                                    {{ $blog->created_at->format('M d, Y') }}
                                                </div>
                                            </div>

                                            <div class="blog-body"
                                                style="padding: 35px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; text-align: center;">

                                                <div>
                                                    <div class="d-inline-flex align-items-center justify-content-center mb-3"
                                                        style="background: rgba(255, 255, 255, 0.15); padding: 6px 16px; border-radius: 30px; color: #ffffff; font-size: 13px; font-weight: 600; letter-spacing: 0.5px;">
                                                        <i class="bi bi-person-fill"
                                                            style="font-size: 14px; margin-right: 6px;"></i>
                                                        <span>Publisher: {{ $blog->author_name ?? 'Admin' }}</span>
                                                    </div>

                                                    <h3 class="blog-title"
                                                        style="font-size: 26px; font-weight: 800; color: #ffffff; margin-bottom: 18px; line-height: 1.4; transition: transform 0.3s ease;">
                                                        {{ $blog->title }}
                                                    </h3>

                                                    <div
                                                        style="width: 60px; height: 3px; background: rgba(255,255,255,0.4); margin: 0 auto 20px auto; border-radius: 2px;">
                                                    </div>

                                                    <p
                                                        style="font-size: 15px; color: rgba(255, 255, 255, 0.9); line-height: 1.8; margin-bottom: 30px; padding: 0 10px; font-weight: 400;">
                                                        {{ Str::limit($blog->description, 140, '...') }}
                                                    </p>
                                                </div>

                                                <div class="blog-footer"
                                                    style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 22px; display: flex; align-items: center; justify-content: center;">
                                                    <a href="#" class="read-more-btn"
                                                        style="background: #ffffff; color: #ff7a00; font-weight: 700; font-size: 15px; text-decoration: none; padding: 12px 35px; border-radius: 50px; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                                                        Read Article
                                                        <i class="bi bi-arrow-right"
                                                            style="font-size: 16px; transition: transform 0.3s ease;"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 text-center py-5">
                                    <p class="text-muted" style="font-size: 18px;"><i
                                            class="bi bi-folder-x fs-1 d-block mb-3" style="color: #03a4ed;"></i>
                                        {{ __('messages.no_blog') }}</p>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
    <!-- End Blog -->
@endsection
