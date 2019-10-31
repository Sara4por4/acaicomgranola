<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="lC9W2DnXHEzfed_xHt7XtBXIS4lnraKpmAVYG1SYIkE" />
          @yield('meta-tags')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{url('/front/css/app.css')}}" rel="stylesheet">
        <link href="{{url('/front/plugins/slick/slick.css')}}" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        @stack('styles')
    </head>
    <body>

    <div id="app">

      @if(Request::is('/'))
          @include('front.layout.nav.nav-homepage')
      @elseif(Request::is('swimwear') || Request::is('fitwear'))
          @include('front.layout.nav.nav-absolute')
      @else
          @include('front.layout.nav.nav')
      @endif


      @yield('content')


      @include('front.layout.footer')

    </div>



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{url('/')}}/front/js/app.js"></script>
    <script src="{{url('/')}}/front/js/actions.js"></script>
    <script src="{{url('/')}}/front/plugins/headroom/headroom.js"></script>
    <script src="{{url('/')}}/front/plugins/headroom/jQuery.headroom.js"></script>
    <script src="{{url('/')}}/front/plugins/slick/slick.min.js"></script>


    @stack('scripts')

    <script>
    $( document ).ready(function() {
      $('.nav--relative').parent('#app').addClass('padding');
    });

    </script>

</body>
</html>
