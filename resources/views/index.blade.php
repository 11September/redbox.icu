@extends('master.layoult')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name='freelancehunt' content='a172d945aa53501' />
    {{--<script src="{{ asset('') }}"></script>--}}

    <script>
        function loadCSS(hf) {
            var ms = document.createElement("link");
            ms.rel = "stylesheet";
            ms.href = hf;
            document.getElementsByTagName("head")[0].appendChild(ms);
        }

        loadCSS("{{ asset('css/layout.css') }}");
        loadCSS("{{ asset('css/animate.css') }}");
        loadCSS("{{ asset('vendor/swiper/css/swiper.min.css') }}");
    </script>
@endsection

@section('content')

    {{-- Preloader --}}
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div>


    <div class="section active home-section background" id="section0">
        <div class="wrapper-intro">
            <div class="row intro-flex">
                <div class="flex-welcome">
                    <div class="home-1-section">
                        <h1 class="company-name"><span class="red">RED</span>BOX</h1>
                        <h3 class="slogan">WEB STUDIO AGENCY</h3>
                        <hr class="line-slogan">
                    </div>
                </div>
                <div class="flex-cube">
                    <div class="wrap">
                        <div class="cube inbox">
                            <div class="container-fluid front">
                                <div class="red">
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                </div>
                            </div>
                            <div class="back">
                                <div class="red">
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                </div>
                            </div>
                            <div class="top">
                                <div class="red">
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="red">
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                </div>
                            </div>
                            <div class="left">
                                <div class="red">
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="red">
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                    <div class="col-md-4 col-xs-4 red-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-intro" id="tester">
                <div class="row">
                    <div class="footer-intro-position">
                        <div class="soc-icon">
                            <a target="_blank" href="https://www.linkedin.com/in/shiptya/"><i
                                        class="fa fa-linkedin fa-lg"></i></a>
                            <a target="_blank" href="skype:ya_blogo?add"><i class="fa fa-skype fa-lg"></i></a>
                            <a target="_blank" href="mailto:shiptya@icloud.com"><i class="fa fa-envelope fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service -->
    <div id="service">
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container ">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>@lang('messages.heading.service')</h2>
                        <p>
                            @lang('messages.heading.service.text')
                        </p>
                    </div>
                </div>
                <div class="row row-space-1">
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-chemistry glyphicon glyphicon-list-alt"></i>
                            </div>
                            <div class="service-info">
                                <h3>@lang('messages.service.text.one_page_site')</h3>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon color-white icon-screen-tablet glyphicon glyphicon-tasks"></i>
                            </div>
                            <div class="service-info">
                                <h3>@lang('messages.service.text.corparate_sites')</h3>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge glyphicon glyphicon-globe"></i>
                            </div>
                            <div class="service-info">
                                <h3>@lang('messages.service.text.web_applications')</h3>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <div class="row row-space-1">
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-notebook glyphicon glyphicon-qrcode"></i>
                            </div>
                            <div class="service-info">
                                <h3>@lang('messages.service.text.web_systems')</h3>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-speedometer glyphicon glyphicon glyphicon-scale"></i>
                            </div>
                            <div class="service-info">
                                <h3>@lang('messages.service.text.stores')</h3>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge glyphicon glyphicon-briefcase"></i>
                            </div>
                            <div class="service-info">
                                <h3>@lang('messages.service.text.business')</h3>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-color-sky-light our-advantages">
        <div class="content-lg container">
            <div class="row">
                <div class="col-md-5 col-sm-5 our-advantages-title">
                    <div>
                        <h2>@lang('messages.heading.result')</h2>
                    </div>
                </div>
                <div class="col-md-5 col-sm-7 col-md-offset-2">
                    <div class="accordion">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed panel-title-child" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            @lang('messages.result.design')
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        @lang('messages.result.design.text')
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed panel-title-child" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            @lang('messages.result.modern_tech')
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        @lang('messages.result.modern_tech.text')
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed panel-title-child" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                           aria-controls="collapseOne">
                                            @lang('messages.result.testing')
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        @lang('messages.result.testing.text')
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed panel-title-child" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                           aria-controls="collapseFour">
                                            @lang('messages.result.support')
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        @lang('messages.result.support.text')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="work">
        <div class="section-seperator">
            <div class="content-md container">

                <div class="wrapper-last-works-headings">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6">
                            <h2>@lang('messages.works.heading')</h2>
                            <p class="seperator-text">
                                @lang('messages.works.heading.text')
                            </p>
                        </div>
                    </div>
                </div>

                <div class="masonry-grid row">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                        <!-- Work -->
                        <div class="work work-popup-trigger margin-b-30">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{ asset('img/800x400/01.jpg') }}"
                                     alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                    <div class="margin-b-30">
                                        <a class="work-popup-content-title" target="_blank"
                                           href="https://map.shtab.net/">
                                            <h3>«Антикорупційна карта ремонтів»</h3>
                                        </a>
                                        <span class="work-popup-content-subtitle">Разработка веб-сервиса для антикорупционного штаба</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="">Задачей нашей команды было создание антикорупционной карты
                                                    ремонтов,
                                                    которая позволяет любому пользователю посмотреть в реальном времени
                                                    информацию о ремонтных работах которыя осуществляються в данный
                                                    момент на територии украины. Сам веб сервис включал в себя удобный
                                                    интерфейс разработанный нашим дизайнером, который позволял удобно
                                                    взаимодействовать с картой и фильтровать отображение данных на
                                                    ней.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item">Design,</li>
                                                    <li class="work-popup-tag-item">Front-end,</li>
                                                    <li class="work-popup-tag-item">Coding</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <p class=""><strong>Технологии:</strong></p>
                                                <ul>
                                                    <li>Adobe XD</li>
                                                    <li>HTML 5</li>
                                                    <li>CSS 3</li>
                                                    <li>Bootstrap 3</li>
                                                    <li>Laravel</li>
                                                    <li>Google API</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="work work-popup-trigger margin-b-30">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="{{ asset('img/397x300/07.png') }}"
                                             alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                            <div class="margin-b-30">
                                                <a class="work-popup-content-title" target="_blank"
                                                   href="http://zastroyshik.com/">
                                                    <h3 class="work-popup-content-title">AMMI</h3>
                                                </a>
                                                <span class="work-popup-content-subtitle">Широкий ассортимент детских товаров</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Компания «AMMI» интегрировала в себе 20-летний опыт
                                                            производства детских колясок TransBaby, лучшие семейные
                                                            традиции, умение идти навстречу пожеланиям клиентов. Все это
                                                            – ради выбранной миссии: помочь вырастить здоровое поколение
                                                            счастливых детей.</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item">Design,</li>
                                                            <li class="work-popup-tag-item">Front-end,</li>
                                                            <li class="work-popup-tag-item">Coding</li>
                                                            <li class="work-popup-tag-item">Programming</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class=""><strong>Технологии:</strong></p>
                                                        <ul>
                                                            <li>Adobe XD</li>
                                                            <li>HTML 5</li>
                                                            <li>CSS 3</li>
                                                            <li>Bootstrap 3</li>
                                                            <li>Open Cart</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="work work-popup-trigger margin-b-30">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="{{ asset('img/397x300/08.png') }}"
                                             alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                            <div class="margin-b-30">
                                                <a class="work-popup-content-title" target="_blank"
                                                   href="http://zastroyshik.com/">
                                                    <h3 class="work-popup-content-title">ДЕТСКИЙ КЛУБ "Я КРАЩИЙ"</h3>
                                                </a>
                                                <span class="work-popup-content-subtitle">ЧАСТНЫЙ ДЕТСКИЙ САД ЕВРОПЕЙСКОГО ТИПА</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>Детский клуб «Я кращий» был создан в 2008 году. На
                                                            сегодняшний день наш коллектив – это команда
                                                            педагогов-профессионалов, знающих и любящих свое дело. Для
                                                            комфортного пребывания детей в студии создано три возрастные
                                                            группы до 10 человек в каждой. Мы предлагаем не только
                                                            приятное времяпровождение для вашего ребенка, но комплексное
                                                            всестороннее развитие.</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item">Design,</li>
                                                            <li class="work-popup-tag-item">Front-end,</li>
                                                            <li class="work-popup-tag-item">Coding</li>
                                                            <li class="work-popup-tag-item">Programming</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class=""><strong>Технологии:</strong></p>
                                                        <ul>
                                                            <li>Adobe XD</li>
                                                            <li>HTML 5</li>
                                                            <li>CSS 3</li>
                                                            <li>Bootstrap 3</li>
                                                            <li>Laravel Framework</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Work -->
                    </div>

                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger work-popup-trigger-height-blockchain">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{ asset('img/397x415/01.jpg') }}"
                                     alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                    <div class="margin-b-30">
                                        <a class="work-popup-content-title" target="_blank"
                                           href="https://buyandsell.io/">
                                            <h3 class="work-popup-content-title">Buy & Sell</h3>
                                        </a>
                                        <span class="work-popup-content-subtitle">Посадочная страница(Landing page) для платформы Blockchain Classified</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Blockhain Classified - новая технология, которая сейчас на пике
                                                    популярности, нуждалась в современном презентабельном сайте. Был
                                                    разработан индивидуальный дизайн с последующей полной
                                                    разработкой
                                                    сайта.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item">Design,</li>
                                                    <li class="work-popup-tag-item">Front-end,</li>
                                                    <li class="work-popup-tag-item">Coding</li>
                                                    <li class="work-popup-tag-item">Programming</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class=""><strong>Технологии:</strong></p>
                                                <ul>
                                                    <li>Adobe XD</li>
                                                    <li>HTML 5</li>
                                                    <li>CSS 3</li>
                                                    <li>Bootstrap 4</li>
                                                    <li>Laravel Framework</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="masonry-grid row margin-b-30">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>

                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <div class="work work-popup-trigger margin-b-20">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{ asset('img/397x300/02.jpg') }}"
                                     alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                    <div class="margin-b-30">
                                        <a class="work-popup-content-title" target="_blank"
                                           href="https://www.behance.net/gallery/57155289/Burger-Landing">
                                            <h3 class="work-popup-content-title">Fat Tony </h3>
                                        </a>
                                        <span class="work-popup-content-subtitle">Дизайн посадочной страницы для магазина по продаже вкусных бургеров</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>В данном проекте была разработана только дизайнерская часть.
                                                    На основе UX был разработан легкий и привлекательный User
                                                    Interface
                                                    для американского предпринемателя. </p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item">Design</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class=""><strong>Технологии:</strong></p>
                                                <ul>
                                                    <li>UX</li>
                                                    <li>UI</li>
                                                    <li>Adobe XD</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{ asset('img/397x300/03.png') }}"
                                     alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                    <div class="margin-b-30">
                                        <a class="work-popup-content-title" target="_blank"
                                           href="http://front.dizz.com.ua/fly/index.html">
                                            <h3 class="work-popup-content-title">Сумський державний університет</h3>
                                        </a>
                                        <span class="work-popup-content-subtitle">Сумский государственный университет</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Задачей нашей команды было внедрять новый функционал на сайт.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item">Front-end</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class=""><strong>Технологии:</strong></p>
                                                <ul>
                                                    <li>HTML 5</li>
                                                    <li>CSS 3</li>
                                                    <li>Bootstrap 3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{ asset('img/397x300/01.jpg') }}"
                                     alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                    <div class="margin-b-30">
                                        <a class="work-popup-content-title" target="_blank"
                                           href="https://itunes.apple.com/ua/app/beerzha/id1253793985?mt=8">
                                            <h3 class="work-popup-content-title">BeerЖa пива</h3>
                                        </a>
                                        <span class="work-popup-content-subtitle">Приложение-аукцион по заказу пива</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>В данном приложении пользователь мог,воспользовавшись кодом дня,
                                                    заказать себе пиво по цене которая динамически изменялась с каждым
                                                    заказом. Нами был разработан фирменый стиль, а также алгоритм
                                                    изменения цены на покупку пива.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item">Design,</li>
                                                    <li class="work-popup-tag-item">Front-end,</li>
                                                    <li class="work-popup-tag-item">Coding</li>
                                                    <li class="work-popup-tag-item">Programming</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class=""><strong>Технологии:</strong></p>
                                                <ul>
                                                    <li>Adobe XD</li>
                                                    <li>HTML 5</li>
                                                    <li>CSS 3</li>
                                                    <li>Bootstrap 3</li>
                                                    <li>Laravel Framework</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="masonry-grid row margin-b-30">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>

                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30">
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{ asset('img/397x300/04.png') }}"
                                     alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                    <div class="margin-b-30">
                                        <a class="work-popup-content-title" target="_blank"
                                           href="http://front.dizz.com.ua/fly/index.html">
                                            <h3 class="work-popup-content-title">NovansJets</h3>
                                        </a>
                                        <span class="work-popup-content-subtitle">Чартер и аренда частного самолета Украина</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Аренда самолета, а так же чартер самолета позволяет быстро
                                                    передвигаться на большие расстояния. В этом случае поезда,
                                                    автомашины не всегда удовлетворяют Вашим потребностям, так как
                                                    они передвигаются достаточно медленно.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item">Front-end,</li>
                                                    <li class="work-popup-tag-item">Coding</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class=""><strong>Технологии:</strong></p>
                                                <ul>
                                                    <li>HTML 5</li>
                                                    <li>CSS 3</li>
                                                    <li>Bootstrap 3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30">
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{ asset('img/397x300/05.png') }}"
                                     alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                    <div class="margin-b-30">
                                        <a class="work-popup-content-title" target="_blank"
                                           href="https://park-slavna.com.ua/">
                                            <h3 class="work-popup-content-title">КОТТЕДЖ-ПАРК «СЛАВНА»</h3>
                                        </a>
                                        <span class="work-popup-content-subtitle">Акции, специальные предложения и системы скидок от коттедж-парк Славна</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>В Ахтырском районе, на берегу реки Ворскла находится коттедж-парк
                                                    «Славна» - идеальное место для тихого семейного отдыха, отдыха в
                                                    компании друзей и близких. Ахтырский район считается одним из
                                                    самых экологически-чистых районов Украины. Благодаря постоянным
                                                    течениям и небольшой глубине вода здесь всегда чистая и
                                                    достаточно теплая, поэтому наш коттедж-парк - идеальное место
                                                    как для индивидуального, так и для семейного отдыха с
                                                    детьми.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item">Design,</li>
                                                    <li class="work-popup-tag-item">Front-end,</li>
                                                    <li class="work-popup-tag-item">Coding</li>
                                                    <li class="work-popup-tag-item">Programming</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class=""><strong>Технологии:</strong></p>
                                                <ul>
                                                    <li>Adobe XD</li>
                                                    <li>HTML 5</li>
                                                    <li>CSS 3</li>
                                                    <li>Bootstrap 3</li>
                                                    <li>Laravel Framework</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30">
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="{{ asset('img/397x300/06.png') }}"
                                     alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Закрыть [X]</a>
                                    <div class="margin-b-30">
                                        <a class="work-popup-content-title" target="_blank"
                                           href="http://zastroyshik.com/">
                                            <h3 class="work-popup-content-title">Cпециалисты в Украине</h3>
                                        </a>
                                        <span class="work-popup-content-subtitle">Выбирайте Среди 3000 Профессионалов И 100 Видов Услуг</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Застройщики добавляют на сайт новости, акционные предложения.
                                                    Вносят изменения в каталог комплексов: обновляют фотогалерею,
                                                    состояние строительства.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item">Design,</li>
                                                    <li class="work-popup-tag-item">Front-end,</li>
                                                    <li class="work-popup-tag-item">Coding</li>
                                                    <li class="work-popup-tag-item">Programming</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class=""><strong>Технологии:</strong></p>
                                                <ul>
                                                    <li>Adobe XD</li>
                                                    <li>HTML 5</li>
                                                    <li>CSS 3</li>
                                                    <li>Bootstrap 3</li>
                                                    <li>Laravel Framework</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-form-wrapper">
        <div class="container">
            <div class="row">
                <h1 class="form-title">@lang('messages.contacts_page.heading')</h1>
                <form class="submitForm" id="submitForm">
                    <div class="col-md-4">
                    <span class="input input--minoru">
                        <input required name="name" class="input__field input__field--yoko" type="text" id="input-16"/>
                        <label class="input__label input__label--yoko" for="input-16">
                            <span class="input__label-content input__label-content--yoko">@lang('messages.contacts_page.form.name')</span>
                        </label>
                    </span>
                    </div>
                    <div class="col-md-4">
                    <span class="input input--minoru">
                        <input required name="phone" class="input__field input__field--yoko" type="text" id="input-17"/>
                        <label class="input__label input__label--yoko" for="input-17">
                            <span class="input__label-content input__label-content--yoko">@lang('messages.contacts_page.form.phone')</span>
                        </label>
                    </span>
                    </div>
                    <div class="col-md-4">
                    <span class="input input--minoru">
                        <input required name="email" class="input__field input__field--yoko" type="email"
                               id="input-18"/>
                        <label class="input__label input__label--yoko" for="input-18">
                            <span class="input__label-content input__label-content--yoko">@lang('messages.contacts_page.form.email')</span>
                        </label>
                    </span>
                    </div>
                    <div class="col-md-8">
                    <span class="text-area input--minoru">
                        <textarea required name="message" class="input__field input__field--yoko"
                                  id="input-19"></textarea>
                        <label class="input__label input__label--yoko" for="input-19">
                            <span class="input__label-content input__label-content--yoko">@lang('messages.contacts_page.form.message')</span>
                        </label>
                    </span>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="progress-button elastic">
                                <button type="submit" form="submitForm">
                                    <span>@lang('messages.contacts_page.form.submit')</span></button>
                                <svg class="progress-circle" width="140" height="70">
                                    <path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
                                </svg>
                                <svg class="checkmark" width="140" height="70">
                                    <path d="m31.5,46.5l15.3,-23.2"/>
                                    <path d="m31.5,46.5l-8.5,-7.1"/>
                                </svg>
                                <svg class="cross" width="140" height="70">
                                    <path d="m35,35l-9.3,-9.3"/>
                                    <path d="m35,35l9.3,9.3"/>
                                    <path d="m35,35l-9.3,9.3"/>
                                    <path d="m35,35l9.3,-9.3"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <a href="tel:+38-(066)-048-04-41" id="popup__toggle">
        <div class="circlephone" style="transform-origin: center;"></div>
        <div class="circle-fill" style="transform-origin: center;"></div>
        <div class="img-circle" style="transform-origin: center;">
            <div class="img-circleblock" style="transform-origin: center;"></div>
        </div>
    </a>

    <a href="javascript:void(0);" class="js-back-to-top back-to-top"></a>
@endsection


@section('scripts')
    <script>
        $(window).on("load", function () {
            preloaderFadeOutTime = 700;

            function hidePreloader() {
                var preloader = $('.spinner-wrapper');
                preloader.fadeOut(preloaderFadeOutTime);
                preloader.remove();
            }

            hidePreloader();
        });

        var scr = {
            "scripts": [
                {"src": "{{ asset('js/modernizr.custom.js') }}", "async": false},
                {"src": "{{ asset('js/classie.js') }}", "async": false},
                {
                    "src": "{{ asset('js/uiProgressButton.js') }}", "async": false
                },
                    {{--{"src": "{{ asset('js/modernizr.custom.js') }}", "async": false},--}}
                    {{--                {"src": "{{ asset('vendor/jquery.easing.js') }}", "async": false},--}}
                {
                    "src": "{{ asset('vendor/masonry/imagesloaded.pkgd.min.js') }}", "async": false
                },
                {"src": "{{ asset('vendor/masonry/jquery.masonry.pkgd.min.js') }}", "async": false},
                {"src": "{{ asset('js/components/masonry.min.js') }}", "async": false},
                {"src": "{{ asset('js/layout.js') }}", "async": false}
            ]
        };
        !function (t, n, r) {
            "use strict";
            var c = function (t) {
                if ("[object Array]" !== Object.prototype.toString.call(t)) return !1;
                for (var r = 0; r < t.length; r++) {
                    var c = n.createElement("script"), e = t[r];
                    c.src = e.src, c.async = e.async, n.body.appendChild(c)
                }
                return !0
            };
            t.addEventListener ? t.addEventListener("load", function () {
                c(r.scripts);
            }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
                c(r.scripts)
            }) : t.onload = function () {
                c(r.scripts)
            }
        }(window, document, scr);
    </script>
@endsection