<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kawsar Mobin Rubel</title>
    <link rel="icon" type="image/png" href="{{ asset('images/frontEnd/title-icon.gif') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('app/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('app/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('custom/about.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('custom/resume.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('app/css/agency.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/particles.js') }}"></script>
    <style media="screen">
    .progress-bar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #17A2B8;
        transition: width .6s ease;
    }
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
        @include('custom_pages.navbar')
    <!-- End navigation -->

    <!-- Header -->
        @include('custom_pages.header')
    <!-- Header End -->

    <!-- About -->
        @include('custom_pages.about')
    <!-- About End -->

    <!-- Resume -->
        @include('custom_pages.resume')
    <!-- Resume End -->

    <!-- Portfolio Grid -->
        @include('custom_pages.portfolio')
    <!-- End portfolio grid -->

    <!-- Contact -->
        @include('custom_pages.contact')
    <!-- End contact -->

    <!-- Footer -->
        @include('custom_pages.footer')
    <!-- End footer -->

    <!-- Portfolio Modals -->
    @foreach ($projects as $proje)
        @include('custom_pages.portfolio_modal')
    @endforeach
    <!-- End portfolio modals -->


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('app/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('app/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('app/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Contact form JavaScript -->
    {{-- <script src="{{ asset('app/js/jqBootstrapValidation.js') }}"></script> --}}
    {{-- <script src="{{ asset('app/js/contact_me.js') }}"></script> --}}

    <!-- Custom scripts for this template -->
    <script src="{{ asset('app/js/agency.min.js') }}"></script>
    <script type="text/javascript">
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', '{{ asset('assets/particles.json') }}', function() {
        console.log('callback - particles.js config loaded');
        });
    </script>
</body>

</html>
