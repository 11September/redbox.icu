@extends('master.layoult')

@section('css')
    <link rel="stylesheet" type="text/css" href="css/layout.css"/>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/dragdealer.css" />
    <link rel="stylesheet" type="text/css" href="css/component2.css" />
    <script src="js/modernizr.custom.js"></script>
@endsection

@section('content')

    <div class="container">
        <header id="header" class="codrops-header">
            <span class="message">This mobile version does not have the slideshow switch</span>
            <button class="slider-switch">Switch view</button>
        </header>
        {{--<div id="overlay" class="overlay">--}}
            {{--<div class="info">--}}
                {{--<span class="info-drag">Drag Sliders</span>--}}
                {{--<span class="info-keys">Use Arrows</span>--}}
                {{--<span class="info-switch">Switch view</span>--}}
                {{--<button>Got it!</button>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div id="slideshow" class="dragslider">
            <section class="img-dragger img-dragger-large dragdealer">
                <div class="handle">

                    @foreach($portfolios as $portfolio)
                        <div class="slide" data-content="{{ "content-" . $portfolio->id }}">
                            <div class="img-wrap"><img src="{{ "storage/" . $portfolio->image }}" alt="{{ $portfolio->name }}"/></div>
                            <h2>{{ $portfolio->name }}</h2>
                            <button class="content-switch">Read more</button>
                        </div>
                    @endforeach

                </div>
            </section><!-- /img-dragger-->
            <!-- Content section -->
            <section class="pages">

                @foreach($portfolios as $portfolio)
                    <div class="content" data-content="{{ "content-" . $portfolio->id }}">
                        <h2>{{ $portfolio->name }}</h2>
                        <p>{{ $portfolio->short_description }}</p>

                        <div style="width: 100%;height: 100%;">
                            {!! $portfolio->about_project !!}
                        </div>

                        <p class="related">
                            <a target="_blank" href="{{ $portfolio->link }}">{{ $portfolio->name }}</a>
                        </p>
                    </div>
                @endforeach

            </section>
        </div>
    </div><!-- /container -->

    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

@endsection

@section('scripts')
    <script src="js/dragdealer.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/dragslideshow.js"></script>
    <script>
        (function() {

//            var overlay = document.getElementById( 'overlay' );
//            var overlayClose = overlay.querySelector( 'button' );
            var header = document.getElementById( 'header' );

            switchBtnn = header.querySelector( 'button.slider-switch' ),
                toggleBtnn = function() {
                    if( slideshow.isFullscreen ) {
                        classie.add( switchBtnn, 'view-maxi' );
                    }
                    else {
                        classie.remove( switchBtnn, 'view-maxi' );
                    }
                },
                toggleCtrls = function() {
                    if( !slideshow.isContent ) {
                        classie.add( header, 'hide' );
                    }
                },
                toggleCompleteCtrls = function() {
                    if( !slideshow.isContent ) {
                        classie.remove( header, 'hide' );
                    }
                },
                slideshow = new DragSlideshow( document.getElementById( 'slideshow' ), {
                    // toggle between fullscreen and minimized slideshow
                    onToggle : toggleBtnn,
                    // toggle the main image and the content view
                    onToggleContent : toggleCtrls,
                    // toggle the main image and the content view (triggered after the animation ends)
                    onToggleContentComplete : toggleCompleteCtrls
                }),
                toggleSlideshow = function() {
                    slideshow.toggle();
                    toggleBtnn();
                },
//                closeOverlay = function() {
//                    classie.add( overlay, 'hide' );
//                };

            // toggle between fullscreen and small slideshow
            switchBtnn.addEventListener( 'click', toggleSlideshow );
            // close overlay
//            overlayClose.addEventListener( 'click', closeOverlay );

        }());


        $( document ).ready(function() {
            $('.slider-switch').click();
        });
    </script>
@endsection

