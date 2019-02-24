@extends('master.layoult')

@section('css')
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="css/contacts.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="css/slide-show/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/slide-show/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/slide-show/mockup4.css"/>
    <link rel="stylesheet" type="text/css" href="css/slide-show/mycss.css"/>

    <link rel="shortcut icon" href="favicon.ico"/>

    <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="css/contacts.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/slide-show/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/slide-show/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/slide-show/mockup4.css"/>
    <link rel="stylesheet" type="text/css" href="css/slide-show/mycss.css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')
    <div id="wrap" class="wrap wrap-about">
        <div class="mockup">
            <img class="mockup__img" src="img/slide-show/background.jpg"/>
            <div class="mobile">
                <ul id="slideshow-1" class="slideshow">
                    <li class="slideshow__item"><img src="img/slide-show/small/mobile-sites.png"/></li>
                    <li class="slideshow__item"><img src="img/slide-show/small/mobile-caffe.png"/></li>
                    <li class="slideshow__item"><img src="img/slide-show/small/mobile-code.png"/></li>
                </ul>
            </div>
            <div class="screen">
                <ul id="slideshow-2" class="slideshow">
                    <li class="slideshow__item current"><img src="img/slide-show/large/websites.jpg"/></li>
                    <li class="slideshow__item"><img src="img/slide-show/large/codes.jpg"/></li>
                    <li class="slideshow__item"><img src="img/slide-show/large/coffe.jpg"/></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="middle-section">
        <h3>@lang('messages.about.redline')</h3>
    </div>

    <div class="my-section">
        <div class="overlay-about"></div>
        <div class="about-info">
            <h3 class="about-title">@lang('messages.about.title')</h3>
            <ul class="nav nav-tabs my-blocks" role="tablist">
                <li role="presentation" class="active">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <h2>@lang('messages.about.design')</h2>
                    <div class="item-lines">
                        <div class="line line-horizontal line-1"></div>
                        <div class="line line-horizontal line-2"></div>
                        <div class="line line-horizontal line-3"></div>
                        <div class="line line-vertical line-4"></div>
                        <div class="line line-vertical line-5"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane active my-block-1" id="home">
                        <div class="block-content">
                            <h3>@lang('messages.about.design.t1')</h3>
                            <h3>@lang('messages.about.design.t2')</h3>
                            <ul>
                                <li class="content-li">@lang('messages.about.design.p1')</li>
                                <li class="content-li">@lang('messages.about.design.p2')</li>
                                <li class="content-li">@lang('messages.about.design.p3')</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li role="presentation">
                    <i class="fa fa-linode" aria-hidden="true"></i>
                    <h2>Front-End</h2>
                    <div class="item-lines">
                        <div class="line line-horizontal line-1"></div>
                        <div class="line line-horizontal line-2"></div>
                        <div class="line line-vertical line-3"></div>
                        <div class="line line-vertical line-4"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane my-block-2" id="profile">
                        <div class="block-content">
                            <h3>@lang('messages.about.fe.t1')</h3>
                            <h3>@lang('messages.about.fe.t2')</h3>
                            <ul>
                                <li class="content-li">@lang('messages.about.fe.p1')</li>
                                <li class="content-li">@lang('messages.about.fe.p2')</li>
                                <li class="content-li">@lang('messages.about.fe.p3')</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li role="presentation">
                    <i class="fa fa-code" aria-hidden="true"></i>
                    <h2>Back-end</h2>
                    <div class="item-lines">
                        <div class="line line-horizontal line-1"></div>
                        <div class="line line-horizontal line-2"></div>
                        <div class="line line-vertical line-3"></div>
                        <div class="line line-vertical line-4"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane my-block-3" id="messages">
                        <div class="block-content">
                            <h3>@lang('messages.about.be.t1')</h3>
                            <h3>@lang('messages.about.be.t2')</h3>
                            <ul>
                                <li class="content-li">@lang('messages.about.be.p1')</li>
                                <li class="content-li">@lang('messages.about.be.p2')</li>
                                <li class="content-li">@lang('messages.about.be.p3')</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li role="presentation">
                    <i class="fa fa-bug" aria-hidden="true"></i>
                    <h2>@lang('messages.about.tests')</h2>

                    <div class="item-lines">
                        <div class="line line-horizontal line-1"></div>
                        <div class="line line-vertical line-2"></div>
                        <div class="line line-horizontal line-3"></div>
                        <div class="line line-vertical line-4"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane my-block-4" id="settings">
                        <div class="block-content">
                            <h3>@lang('messages.about.tests.t1')</h3>
                            <h3>@lang('messages.about.tests.t2')</h3>
                            <ul>
                                <li class="content-li">@lang('messages.about.tests.p1')</li>
                                <li class="content-li">@lang('messages.about.tests.p2')</li>
                                <li class="content-li">@lang('messages.about.tests.p3')</li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    @include('partials.footer')

@endsection

@section('scripts')
    <script src="js/slide-show/modernizr.custom.js"></script>
    <script src="js/slide-show/main.js"></script>
    <script src="js/slide-show/classie.js"></script>
    <script src="js/uiProgressButton.js"></script>

    <script src="vendor/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/slide-show/modernizr.custom.js"></script>
    <script src="js/slide-show/main.js"></script>
    <script src="js/slide-show/classie.js"></script>
    <script src="js/uiProgressButton.js"></script>
    <script>
        $("document").ready(function (argument) {
            var prevTab;
            $('.nav-tabs li').mouseover(function (e) {
                e.preventDefault();
                if (prevTab !== undefined && prevTab.length > 0) {
                    prevTab.css({
                        'opacity': '0',
                        'visibility': 'hidden'
                    });
                }
                prevTab = $(this).find('div.tab-pane');
                $(this).find('div.tab-pane').css({
                    // 'display': 'block',
                    'background-color': $(this).css('background-color'),
                    'opacity': '1',
                    'visibility': 'visible'
                });
                $(this).find('div.line').css('display', 'block');
            })
                .mouseout(function () {
                    $(this).find('div.tab-pane').css({
                        'opacity': '0',
                        'visibility': 'hidden',
                    });
                    $(this).find('div.line').css('display', 'none');
                });
        });

        (function () {
            new Slideshow(document.getElementById('slideshow-1'));
            setTimeout(function () {
                new Slideshow(document.getElementById('slideshow-2'));
            }, 1750);

            /* Mockup responsiveness */
            var body = docElem = window.document.documentElement,
                wrap = document.getElementById('wrap'),
                mockup = wrap.querySelector('.mockup'),
                mockupWidth = mockup.offsetWidth;

            scaleMockup();

            function scaleMockup() {
                var wrapWidth = wrap.offsetWidth,
                    val = wrapWidth / mockupWidth;

                mockup.style.transform = 'scale3d(' + val + ', ' + val + ', 1)';
            }

            window.addEventListener('resize', resizeHandler);

            function resizeHandler() {
                function delayed() {
                    resize();
                    resizeTimeout = null;
                }

                if (typeof resizeTimeout != 'undefined') {
                    clearTimeout(resizeTimeout);
                }
                resizeTimeout = setTimeout(delayed, 50);
            }

            function resize() {
                scaleMockup();
            }
        })();
    </script>
@endsection

