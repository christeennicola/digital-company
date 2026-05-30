 <footer>
     <div class="container">

         <div class="footer-menu wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s"
             style="margin-top: 20px; margin-bottom: 30px;margin-top:60px; display: flex; justify-content: center;">
             <ul
                 style="list-style: none; padding: 0; display: flex; gap: 25px; flex-wrap: wrap; justify-content: center;">
                 <li><a href="{{ route('home') }}"
                         style="color: #2a2a2a; font-weight: 500; text-decoration: none; transition: 0.3s;">{{ __('messages.home') }}</a>
                 </li>
                 <li><a href="{{ route('about') }}"
                         style="color: #2a2a2a; font-weight: 500; text-decoration: none; transition: 0.3s;">{{ __('messages.about_us') }}</a>
                 </li>
                 <li><a href="{{ route('service') }}"
                         style="color: #2a2a2a; font-weight: 500; text-decoration: none; transition: 0.3s;">{{ __('messages.services') }}</a>
                 </li>
                 <li><a href="{{ route('porto') }}"
                         style="color: #2a2a2a; font-weight: 500; text-decoration: none; transition: 0.3s;">{{ __('messages.porto') }}</a>
                 </li>
                 <li><a href="{{ route('blog') }}"
                         style="color: #2a2a2a; font-weight: 500; text-decoration: none; transition: 0.3s;">{{ __('messages.blog') }}</a>
                 </li>
                 <li><a href="{{ route('message') }}"
                         style="color: #2a2a2a; font-weight: 500; text-decoration: none; transition: 0.3s;">{{ __('messages.message_us') }}</a>
                 </li>
             </ul>
         </div>

         <div class="row">
             <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                 <p>{{ __('messages.footer') }}

                     <br>{{ __('messages.design') }} <a rel="nofollow"
                         href="https://templatemo.com">{{ __('messages.temp') }}</a>
                 </p>
             </div>
         </div>
     </div>
 </footer>
