<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>
    @include('partials.head')
    @include('partials.css')
    @include('partials.analytics')

    @yield('css')
</head>
<body id="body" data-spy="scroll" data-target=".header">

@include('partials.nav')

@yield('content')

@yield('footer')

@include('partials.scripts')
@yield('scripts')
</body>
</html>