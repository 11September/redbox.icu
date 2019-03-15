@extends('master.layoult')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <!-- blog post -->
                    <div class="blog_post">
                        <div class="post_media">
                            <img src="assets/img/post_1.jpg" alt="post image">
                        </div>
                        <div class="post_info">
                            <div class="post_date montserrat-text uppercase">january 13, 2016</div>
                            <i class="icon ion-chatbox-working"></i>
                            <span>8</span>
                            <i class="icon ion-ios-heart"></i>
                            <span>15</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <a href="{{ url('post') }}" class="link montserrat-text uppercase">continue reading <i
                                    class="icon ion-arrow-right-c"></i></a>
                    </div>
                    <!-- blog post -->
                    <div class="blog_post wow fadeInUp">
                        <div class="post_media">
                            <iframe height="500"
                                    src="https://www.youtube.com/embed/1mO_QMYV-QE?list=PLXWu0OP8--WQZcdnx1OuIwQ2MEMT2ee8O"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="post_info">
                            <div class="post_date montserrat-text uppercase">january 13, 2016</div>
                            <i class="icon ion-chatbox-working"></i>
                            <span>8</span>
                            <i class="icon ion-ios-heart"></i>
                            <span>15</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <a href="single-post.html" class="link montserrat-text uppercase">continue reading <i
                                    class="icon ion-arrow-right-c"></i></a>
                    </div>
                    <!-- blog post -->
                    <div class="blog_post wow fadeInUp">
                        <div class="post_media">
                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/51057943&amp;amp;color=ff5500&amp;amp;auto_play=false&amp;amp;hide_related=false&amp;amp;show_comments=true&amp;amp;show_user=true&amp;amp;show_reposts=false"
                                    frameborder="0"></iframe>
                        </div>
                        <div class="post_info">
                            <div class="post_date montserrat-text uppercase">january 13, 2016</div>
                            <i class="icon ion-chatbox-working"></i>
                            <span>8</span>
                            <i class="icon ion-ios-heart"></i>
                            <span>15</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <a href="single-post.html" class="link montserrat-text uppercase">continue reading <i
                                    class="icon ion-arrow-right-c"></i></a>
                    </div>

                    <!-- pagination -->
                    <div class="blog_pagination wow fadeInUp">
                        <a href="" class="page">
                            <i class="icon ion-arrow-left-c prev"></i>
                            <span>previous</span>
                        </a>
                        <span class="divisor">/</span>
                        <a href="" class="page">
                            <span>next</span>
                            <i class="icon ion-arrow-right-c next"></i>
                        </a>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="input_2">
                                <input type="text" placeholder="search...">
                                <button type="submit"><i class="icon ion-search"></i></button>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title">posts</div>
                            <div class="tab">
                                <nav>
                                    <a href="">popular</a>
                                    <a href="">latest</a>
                                    <div class="bottom-line"></div>
                                </nav>
                                <div class="tab_single shown">
                                    <div class="related_post">
                                        <div class="thumb"><img src="assets/img/thumb.jpg" alt="image"></div>
                                        <a href="" class="post_title montserrat-text uppercase">Magna mollis
                                            ultricies</a>
                                        <div class="post_date">3th october 2015</div>
                                    </div>
                                    <div class="related_post">
                                        <div class="thumb"><img src="assets/img/thumb.jpg" alt="image"></div>
                                        <a href="" class="post_title montserrat-text uppercase">Magna mollis
                                            ultricies</a>
                                        <div class="post_date">3th october 2015</div>
                                    </div>
                                    <div class="related_post">
                                        <div class="thumb"><img src="assets/img/thumb.jpg" alt="image"></div>
                                        <a href="" class="post_title montserrat-text uppercase">Magna mollis
                                            ultricies</a>
                                        <div class="post_date">3th october 2015</div>
                                    </div>
                                </div>
                                <div class="tab_single">
                                    <div class="related_post">
                                        <div class="thumb"><img src="assets/img/thumb.jpg" alt="image"></div>
                                        <a href="" class="post_title montserrat-text uppercase">Magna mollis
                                            ultricies</a>
                                        <div class="post_date">3th october 2015</div>
                                    </div>
                                    <div class="related_post">
                                        <div class="thumb"><img src="assets/img/thumb.jpg" alt="image"></div>
                                        <a href="" class="post_title montserrat-text uppercase">Magna mollis
                                            ultricies</a>
                                        <div class="post_date">3th october 2015</div>
                                    </div>
                                    <div class="related_post">
                                        <div class="thumb"><img src="assets/img/thumb.jpg" alt="image"></div>
                                        <a href="" class="post_title montserrat-text uppercase">Magna mollis
                                            ultricies</a>
                                        <div class="post_date">3th october 2015</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget wow fadeInUp">
                            <div class="widget_title">categories</div>
                            <ul class="list_2">
                                <li><a href="">Business <span>15</span></a></li>
                                <li><a href="">Photography <span>22</span></a></li>
                                <li><a href="">Journal <span>27</span></a></li>
                                <li><a href="">Web development <span>30</span></a></li>
                            </ul>
                        </div>

                        <div class="widget wow fadeInUp">
                            <div class="widget_title">tags cloud</div>
                            <ul class="tags">
                                <li><a href="">css</a></li>
                                <li><a href="">html</a></li>
                                <li><a href="">javascript</a></li>
                                <li><a href="">jquery</a></li>
                                <li><a href="">bootstrap</a></li>
                                <li><a href="">web development</a></li>
                                <li><a href="">ui &amp; ux</a></li>
                            </ul>
                        </div>

                        {{--<div class="widget wow fadeInUp">--}}
                            {{--<div class="widget_title">instagram</div>--}}
                            {{--<div class="thumb" style="margin-bottom:15px">--}}
                                {{--<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>--}}
                            {{--</div>--}}
                            {{--<div class="thumb" style="margin-bottom:15px">--}}
                                {{--<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>--}}
                            {{--</div>--}}
                            {{--<div class="thumb" style="margin-bottom:15px">--}}
                                {{--<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>--}}
                            {{--</div>--}}
                            {{--<div class="thumb" style="margin-bottom:15px">--}}
                                {{--<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>--}}
                            {{--</div>--}}
                            {{--<div class="thumb" style="margin-bottom:15px">--}}
                                {{--<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>--}}
                            {{--</div>--}}
                            {{--<div class="thumb" style="margin-bottom:15px">--}}
                                {{--<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>--}}
                            {{--</div>--}}
                            {{--<div class="thumb" style="margin-bottom:15px">--}}
                                {{--<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>--}}
                            {{--</div>--}}
                            {{--<div class="thumb" style="margin-bottom:15px">--}}
                                {{--<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

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

