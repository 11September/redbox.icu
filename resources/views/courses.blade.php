@extends('master.layoult')

@section('css')
    <style>
        .background-courses {
            background-image: url("{{ asset('img/background-forma.jpg') }}");
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .wrapper-intro-courses {
            padding-top: 150px;
        }

        .wrapper-one-course-item {
            width: 100%;
            -o-transition: transform 1s linear;
            -ms-transition: transform 1s linear;
            -moz-transition: transform 1s linear;
            -webkit-transition: transform 1s linear;
            transition: transform 1s linear;
        }

        .wrapper-one-course-item:hover {
            -o-transform: rotate3d(0, 2, 0, 180deg);
            -ms-transform: rotate3d(0, 2, 0, 180deg);
            -moz-transform: rotate3d(0, 2, 0, 180deg);
            -webkit-transform: rotate3d(0, 2, 0, 180deg);
            transform: rotate3d(0, 2, 0, 180deg);
        }

        .one-course-hover {
            display: none;
        }

        .one-course-hover img {
            display: none;
        }

        .wrapper-one-course-item:hover .one-course-hover {
            display: block;
        }

        .wrapper-one-course-item:hover .one-course-active {
            display: none;
        }

        .wrapper-one-course-item:hover .one-course-hover + span {
            text-align: center;
        }

        .wrapper-one-course-item .one-course-hover {
            -o-transition: transform 2s linear;
            -ms-transition: transform 2s linear;
            -moz-transition: transform 2s linear;
            -webkit-transition: transform 2s linear;
            transition: transform 2s linear;
        }

        .wrapper-one-course-item:hover .one-course-hover {
            -o-transform: rotate3d(0, 2, 0, 180deg);
            -ms-transform: rotate3d(0, 2, 0, 180deg);
            -moz-transform: rotate3d(0, 2, 0, 180deg);
            -webkit-transform: rotate3d(0, 2, 0, 180deg);
            transform: rotate3d(0, 2, 0, 180deg);
        }

        .one-course-item-image {
            width: 100%;
            height: 200px;
            padding: 0 10%;
        }

        .one-course-item-image img {
            height: 100%;
            margin: 0 auto;
            text-align: center;
            display: block;
        }

        .wrapper-one-course-item h3 {
            text-align: center;
            text-transform: uppercase;
        }

        .one-course-item-description p {
            color: white;
            text-align: center;
        }

        .home-section {
            height: auto !important;
        }
    </style>

    <!-- THEME STYLES -->
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>

    <link rel="shortcut icon" href="favicon.ico"/>
@endsection

@section('content')
    <div class="section active home-section background-courses" id="section0">

        <div id="particles-js"></div>

        <div class="wrapper-intro-courses">

            <div class="container">
                <div class="row">
                    <div class="courses_title_text upper-center ">
                        <h3>
                            @lang('messages.courses_page.title1')
                        </h3>
                    </div>
                    <div class="upper-center courses_p_text ">
                        <h4>
                            <blink>@lang('messages.courses_page.title2')</blink>
                        </h4>
                    </div>
                    <div class="upper-center courses_p_text ">
                        <h4>
                            @lang('messages.courses_page.title3')
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper-one-service-block">
                            <div class="row">
                                <div class="col-md-4 center-block swin_anim_block pic_cours_st">
                                    <img class="img-circle lang-icon" src="{{ asset('img/html.png') }}" alt="">
                                </div>
                                <div class="col-md-8 swin_anim_block text_cours_st">
                                    <p class="right-program-descr">
                                        @lang('messages.courses_page.p.html5')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper-one-service-block">
                            <div class="row reverse">
                                <div class="col-md-8 swin_anim_block text_cours_st">
                                    <p class="text-right right-program-descr ">
                                        @lang('messages.courses_page.p.css3')
                                    </p>
                                </div>
                                <div class="col-md-4 swin_anim_block pic_cours_st">
                                    <img class="img-circle lang-icon img-rightg" src="{{ asset('img/css.png') }}"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper-one-service-block">
                            <div class="row">
                                <div class="col-md-4 swin_anim_block pic_cours_st">
                                    <img class="img-circle lang-icon" src="{{ asset('img/js.png') }}" alt="">
                                </div>
                                <div class="col-md-8 swin_anim_block text_cours_st">
                                    <p class="right-program-descr">
                                        @lang('messages.courses_page.p.js')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper-one-service-block">
                            <div class="row reverse">
                                <div class="col-md-8 swin_anim_block text_cours_st">
                                    <p class="text-right right-program-descr">
                                        @lang('messages.courses_page.p.php')
                                    </p>
                                </div>
                                <div class="col-md-4 swin_anim_block pic_cours_st">
                                    <img class="img-circle lang-icon img-rightg" src="{{ asset('img/php1.png') }}"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="wrapper-one-service-block">
                            <div class="row">
                                <div class="col-md-4 swin_anim_block pic_cours_st">
                                    <img class="img-circle lang-icon" src="{{ asset('img/sql.png') }}" alt="">
                                </div>
                                <div class="col-md-8 swin_anim_block text_cours_st">
                                    <p class="right-program-descr ">
                                        @lang('messages.courses_page.p.sql')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="contact-form-wrapper" id="courses_send">
                    <div class="container">
                        <div class="row">
                            {{--<h1 class="form-title">@lang('messages.contacts_page.heading')</h1>--}}
                            <form class="submitForm" id="submitForm">
                                <div class="col-md-4">
                                    <span class="input input--minoru">
                                        <input required name="name" class="input__field input__field--yoko" type="text"
                                               id="input-16"/>
                                        <label class="input__label input__label--yoko" for="input-16">
                                            <span class="input__label-content input__label-content--yoko">@lang('messages.contacts_page.form.name')</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <span class="input input--minoru">
                                        <input required name="phone" class="input__field input__field--yoko" type="text"
                                               id="input-17"/>
                                        <label class="input__label input__label--yoko" for="input-17">
                                            <span class="input__label-content input__label-content--yoko">@lang('messages.contacts_page.form.phone')</span>
                                        </label>
                                    </span>
                                </div>
                                {{--<div class="col-md-4">--}}
                                    {{--<span class="input input--minoru">--}}
                                        {{--<input required name="email" class="input__field input__field--yoko"--}}
                                               {{--type="email"--}}
                                               {{--id="input-18"/>--}}
                                        {{--<label class="input__label input__label--yoko" for="input-18">--}}
                                            {{--<span class="input__label-content input__label-content--yoko">@lang('messages.contacts_page.form.email')</span>--}}
                                        {{--</label>--}}
                                    {{--</span>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<span class="text-area input--minoru">--}}
                                        {{--<textarea required name="message" class="input__field input__field--yoko"--}}
                                                  {{--id="input-19"></textarea>--}}
                                        {{--<label class="input__label input__label--yoko" for="input-19">--}}
                                            {{--<span class="input__label-content input__label-content--yoko">@lang('messages.contacts_page.form.message')</span>--}}
                                        {{--</label>--}}
                                    {{--</span>--}}
                                {{--</div>--}}
                                <div class="col-md-4">
                                    <div class="box">
                                        <div class="progress-button">
                                            <button type="submit" form="submitForm">
                                                <span>@lang('messages.courses_page.form.send_r')</span></button>
                                            <svg class="progress-circle" width="70" height="70">
                                                <path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
                                            </svg>
                                            <svg class="checkmark" width="70" height="70">
                                                <path d="m31.5,46.5l15.3,-23.2"/>
                                                <path d="m31.5,46.5l-8.5,-7.1"/>
                                            </svg>
                                            <svg class="cross" width="70" height="70">
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
                        <div class="row">
                            <div class="wrapper-call-button"><p class="color-white">@lang('messages.courses_page.p.callus')</p>
                                    {{--<button href="#numshow1" data-toggle="collapse" class="or_call_now">--}}
                                        {{--<span>Call now</span>--}}
                                    {{--</button>--}}

                                    <a href="tel:+38-(066)-048-04-41"><i class="fa fa-phone-square or_call_now" aria-hidden="true"></i></a>
                                    {{--<div class="collapse " id="numshow1">--}}
                                        {{--<div class="well">--}}
                                            {{--<p><a href="tel:+38-(066)-048-04-41">+ 3 8 ( 0 6 6 ) 0 4 8 - 0 4 - 4 1</a></p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @include('partials.footer')

@endsection

@section('scripts')
    <script src="{{ asset('js/particles.js') }}"></script>

    <script>
        $(document).ready(function () {
            /* ---- particles.js config ---- */

            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 160,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ed3626"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#db3132",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        });
    </script>


    <script src="{{ asset('js/layout.min.js') }}" type="text/javascript"></script>
@endsection

