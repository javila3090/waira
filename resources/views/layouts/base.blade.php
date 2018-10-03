<html lang="en">

    <head>
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        <!-- OR -->
        {!! SEO::generate() !!}

        <!-- MINIFIED -->
        {!! SEO::generate(true) !!}


        <!-- LUMEN -->
        {!! app('seotools')->generate() !!}
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Waira Dev</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="css/slick.css" rel="stylesheet" media="screen">

    </head>

    <body id="page-top">

        @include('partials.menu')

        @section('content')
        @show

        @include('partials.footer')

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/new-age.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="{{asset('js/contactform.js')}}"></script>
        <script>

            new WOW().init();


            $(document).ready(function(){
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }]
                });
            });

        </script>
    </body>

</html>
