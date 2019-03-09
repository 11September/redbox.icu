<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
    <nav class="navbar" role="navigation">
        <div class="container">
            <div class="menu-container js_nav-item">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <div class="logo">
                    <a class="logo-wrap" href="{{ url('/') }}">
                        <img src="{{ asset('img/redboxLogo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav navbar-nav-right">
                        <li class="js_nav-item nav-item">
                            <a class="nav-item-child nav-item-hover {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                                @lang('messages.menu.home')
                            </a>
                        </li>
                        <li class="js_nav-item nav-item">
                            <a class="nav-item-child nav-item-hover {{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">
                                @lang('messages.menu.about')
                            </a>
                        </li>
                        <li class="js_nav-item nav-item">
                            <a class="nav-item-child nav-item-hover {{ Request::is('portfolio') ? 'active' : '' }}" href="{{ url('portfolio') }}">
                                @lang('messages.menu.portfolio')
                            </a>
                        </li>
                        <li class="js_nav-item nav-item">
                            <a class="nav-item-child nav-item-hover {{ Request::is('blog') ? 'active' : '' }}" href="{{ url('blog') }}">
                                @lang('messages.menu.blog')
                            </a>
                        </li>
                        <li class="js_nav-item nav-item">
                            <a class="nav-item-child nav-item-hover {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">
                                @lang('messages.menu.contacts')
                            </a>
                        </li>
                        <li class="js_nav-item nav-item">
                            <a href="{{ url('/language/en') }}"
                               class="nav-item-child nav-item-hover language  @if ( Config::get('app.locale') == 'en') active-language @endif">
                                @lang('messages.menu.language.en')
                            </a>
                        </li>
                        <li class="js_nav-item nav-item">
                            <a href="{{ url('/language/ru') }}"
                               class="nav-item-child nav-item-hover language @if ( Config::get('app.locale') == 'ru') active-language @endif">
                                @lang('messages.menu.language.ru')
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--========== END HEADER ==========-->