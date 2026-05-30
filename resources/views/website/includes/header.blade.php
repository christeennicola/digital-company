 <!-- Start Top Bar For LogIn And Register -->
 <div class="site-top-bar">
     <div class="container">
         <div class="d-flex justify-content-end align-items-center gap-3">
             @auth
                 <span class="text-orange me-2">
                     @if (auth()->user()->role === 'admin')
                         <a href="{{ url('admin/dash') }}" class="top-bar-link admin-zone">
                             <i class="fa fa-dashboard"></i> {{ __('messages.control_panel') }} ({{ auth()->user()->name }})
                         </a>
                     @else
                         Welcome, <strong>{{ auth()->user()->name }}</strong>
                     @endif
                 </span>

                 <a href="#" class="top-bar-link logout-btn"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     {{ __('messages.logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
             @else
                 <a href="{{ route('login') }}" class="top-bar-link">Login</a>
                 <div class="top-bar-divider"></div>
                 <a href="{{ route('register') }}" class="top-bar-link">Register</a>
             @endauth
         </div>
     </div>
 </div>



 <!-- End Top Bar For LogIn And Register -->

 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <nav class="main-nav">
                     <!-- ***** Logo Start ***** -->
                     <a href="{{ route('home') }}" class="logo">
                         <h4>Spac<span>Dyna</span></h4>

                     </a>

                     <!-- ***** Logo End ***** -->
                     <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                         <li class="scroll-to-section"><a href="{{ route('home') }}"
                                 class="active">{{ __('messages.home') }}</a></li>
                         <li class="scroll-to-section"><a
                                 href="{{ route('about') }}">{{ __('messages.about_us') }}</a>
                         </li>
                         <li class="scroll-to-section"><a
                                 href="{{ route('service') }}">{{ __('messages.services') }}</a></li>
                         <li class="scroll-to-section"><a href="{{ route('porto') }}">{{ __('messages.porto') }}</a>
                         </li>
                         <li class="scroll-to-section"><a href="{{ route('blog') }}">{{ __('messages.blog') }}</a>
                         </li>
                         <li class="scroll-to-section"><a
                                 href="{{ route('message') }}">{{ __('messages.message_us') }}</a></li>
                         <li class="nav-item dropdown scroll-to-section">
                             <div class="dropdown">
                                 <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                     id="dropdownMenuLink" aria-expanded="false" style="text-decoration: none;">
                                     {{ app()->getLocale() == 'en' ? 'English' : 'العربية' }}
                                 </a>

                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                     <li><a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">English</a>
                                     </li>
                                     <li><a class="dropdown-item" href="{{ route('lang.switch', 'ar') }}">العربية</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>

                         @if (Auth::check() && Auth::user()->role !== 'admin')
                             <li class="scroll-to-section">
                                 <div class="main-red-button"><a
                                         href="{{ route('user-contact.index') }}">{{ __('messages.show_message') }}</a>
                                 </div>
                             </li>
                         @endif

                     </ul>
                     <!-- ***** Menu End ***** -->
                 </nav>
             </div>
         </div>
     </div>
 </header>
 <!-- ***** Header Area End ***** -->
