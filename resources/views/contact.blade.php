@extends('master.layoult')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <div id="container" class="intro-effect-push">
        <article class="content">
            <section id="contacts-content">
                <div class="container">
                    <div class="map">
                        <img src="{{ asset('img/earth.png') }}" alt="earth">
                    </div>
                </div>

                <div class="contacts-blocks">
                    <div class="container">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-item">
                                <i class="fa fa-phone-square fa-3x" aria-hidden="true"></i>
                                <h4>@lang('messages.contacts_page.contact_us.phone')</h4>
                                <p>
                                    <a href="tel:+38-(066)-048-04-41" class="contacts-link" rel="nofollow">
                                        +38 (066) 048-04-41
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-item">
                                <i class="fa fa-paper-plane fa-3x" aria-hidden="true"></i>
                                <h4>@lang('messages.contacts_page.contact_us.write')</h4>
                                <p>
                                    <a href="mailto:red-box.gmail.com?Subject=Hello%20again" target="_top">info@rebdox.in.ua</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-item">
                                <i class="fa fa-font-awesome fa-3x" aria-hidden="true"></i>
                                <h4>@lang('messages.contacts_page.contact_us.social')</h4>
                                <p>
                                    <span class="social-wrapper-link">
                                        <a href="">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                    <span class="social-wrapper-link">
                                        <a href="https://www.linkedin.com/in/red-box-509a86157/">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                    <span class="social-wrapper-link">
                                        <a href="https://myredbox.slack.com/">
                                            <i class="fa fa-slack" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                    <span class="social-wrapper-link">
                                        <a href="https://www.instagram.com/redbox_dev">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                                    <div class="progress-button">
                                        <button type="submit" form="submitForm">
                                            <span>@lang('messages.contacts_page.form.submit')</span></button>
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
                </div>
            </section>
        </article>
    </div><!-- /container -->

    @include('partials.footer')

@endsection

@section('scripts')
    <script src="js/modernizr.custom.js"></script>

    <script src="js/classie.js"></script>
    <script src="js/uiProgressButton.js"></script>

    <script>
        $(document).ready(function ($) {
            $(".progress-button").click(function (event) {
                if ($("#input-16").val() != "" && $("#input-17").val() != "" && $("#input-18").val() != "" && $("#input-19").val() != "") {
                    event.preventDefault();
                    [].slice.call(document.querySelectorAll('.progress-button')).forEach(function (bttn, pos) {
                        new UIProgressButton(bttn, {
                            callback: function (instance) {
                                var progress = 0,
                                    interval = setInterval(function () {
                                        progress = Math.min(progress + Math.random() * 0.1, 1);
                                        instance.setProgress(progress);

                                        if (progress === 1) {
                                            instance.stop(pos === 1 || pos === 3 ? -1 : 1);
                                            clearInterval(interval);
                                        }
                                    }, 150);

                                var data = $(".submitForm").serialize();

                                $.ajax({
                                    url: "/form",
                                    type: "POST",
                                    data: data,
                                    success: function (responce) {
                                        // alert("Прибыли данные: " + responce);
                                    }
                                })
                            }
                        });
                    });
                }
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // browser window scroll (in pixels) after which the "back to top" link is shown
            var offset = 300,
                //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
                offset_opacity = 1200,
                //duration of the top scrolling animation (in ms)
                scroll_top_duration = 700,
                //grab the "back to top" link
                $back_to_top = $('.js-back-to-top');

            //hide or show the "back to top" link
            $(window).scroll(function () {
                ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('back-to-top-is-visible') : $back_to_top.removeClass('back-to-top-is-visible back-to-top-fade-out');
                if ($(this).scrollTop() > offset_opacity) {
                    $back_to_top.addClass('back-to-top-fade-out');
                }
            });

            //smooth scroll to top
            $back_to_top.on('click', function (event) {
                event.preventDefault();
                $('body,html').animate({
                        scrollTop: 0
                    }, scroll_top_duration
                );
            });
        });
    </script>
@endsection

