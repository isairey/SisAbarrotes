<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sistema Ventas @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{asset('img/kaiadmin/favicon.ico')}}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fonts and icons -->
    <script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["{{asset('css/fonts.min.css') }}"],
        },
        active: function() {
            sessionStorage.fonts = true;
        },
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{asset('css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{asset('css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('css/demo.css')}}" />
    @stack('css')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <x-navigation-menu />
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <!-- Se usa el componente para llamar solo a la navegación header -->
                <!-- Navbar Header -->
                <x-navigation-header />
                <!-- End Navbar -->
            </div>

            @yield('content')

            <!-- Footer -->
            <x-footer />
            <!-- End Footer -->
        </div>

        <!-- Custom template | don't include it in your project! -->
        <!-- <x-custom-template /> -->
        <!-- End Custom template -->
    </div>
    <!--   bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Core JS Files  -->
    <script src="{{asset('js/core/jquery-3.7.1.min.js')}}  "></script>
    <script src="{{asset('js/core/popper.min.js')}}  "></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}  "></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}  ">
    </script>

    <!-- Chart JS -->
    <script src="{{asset('js/plugin/chart.js/chart.min.js')}}  ">
    </script>

    <!-- jQuery Sparkline -->
    <script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}">
    </script>

    <!-- Chart Circle -->
    <script src="{{asset('js/plugin/chart-circle/circles.min.js')}}">
    </script>

    <!-- Datatables -->
    <script src="{{asset('js/plugin/datatables/datatables.min.js')}}">
    </script>

    <!-- Bootstrap Notify -->
    <script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}">
    </script>

    <!-- Sweet Alert -->
    <script src="{{asset('js/plugin/sweetalert/sweetalert.min.js')}}">
    </script>

    <!-- Kaiadmin JS -->
    <script src="{{asset('js/kaiadmin.min.js')}}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{asset('js/setting-demo.js')}}"></script>
    <!-- <script src="{{asset('js/demo.js')}}"></script> -->
    <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
    });
    </script>
    @stack('js')

    <!-- jQuery Vector Maps -->
    <!-- <script src="{{asset('js/plugin/jsvectormap/jsvectormap.min.js')}}">
    </script>
    <script src="{{asset('js/plugin/jsvectormap/world.js')}}">
    </script> -->
</body>

</html>