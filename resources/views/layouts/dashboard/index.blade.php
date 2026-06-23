<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="description" content="Ogene983FM Best indigenous Radio Station, South-East of the Niger. Infusing Local content, reaching out to upwardly mobile and locals. Bridging the gap between the urban contemporary and Indigenous broadcasting">
        <!-- Favicon -->
        <link href="{{ asset('images/logo.png') }}" rel="shortcut icon" />
        <!-- Twitter meta-->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@ogenefm983">
        <meta property="twitter:creator" content="@ogenefm983">
        <!-- Open Graph Meta-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Ogene 98.3.FM">
        <meta property="og:title" content="Ogene 98.3.FM">
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="Ogene983FM Best indigenous Radio Station, South-East of the Niger. Infusing Local content, reaching out to upwardly mobile and locals. Bridging the gap between the urban contemporary and Indigenous broadcasting">
        <title>Ogene98.3FM Dashboard @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}">
        <!-- Font-icon css-->
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('css')
    </head>

    <body class="app sidebar-mini rtl bg-bg-dark text-white font-sans antialiased">
        <!-- Modern Dashboard Overrides -->
        <style>
            .app-header {
                background-color: rgba(10, 14, 39, 0.8) !important;
                backdrop-filter: blur(20px);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            .app-sidebar {
                background-color: rgba(10, 14, 39, 0.95) !important;
                backdrop-filter: blur(20px);
                border-right: 1px solid rgba(255, 255, 255, 0.1);
            }
            .app-menu__item {
                border-left: 3px solid transparent;
                transition: all 0.3s ease;
            }
            .app-menu__item.active, .app-menu__item:hover {
                background: rgba(191, 0, 255, 0.1) !important;
                border-left-color: var(--color-primary);
                color: var(--color-secondary) !important;
            }
            .app-content {
                background-color: var(--color-bg-dark);
            }
            .app-title {
                background-color: rgba(255, 255, 255, 0.03);
                border-radius: 1.5rem;
                padding: 1.5rem 2rem;
                margin-bottom: 2rem;
                border: 1px solid rgba(255, 255, 255, 0.05);
            }
            .tile, .widget-small {
                background-color: rgba(255, 255, 255, 0.05) !important;
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1) !important;
                border-radius: 1.5rem !important;
                box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important;
                color: white !important;
            }
            .widget-small .info h4 {
                color: rgba(255, 255, 255, 0.6);
            }
            .widget-small.primary .icon { background-color: var(--color-primary) !important; }
            .widget-small.info .icon { background-color: var(--color-secondary) !important; }
            .widget-small.warning .icon { background-color: var(--color-accent) !important; }
            .widget-small.danger .icon { background-color: #EF4444 !important; }
        </style>

        <!-- Navbar-->
        @include('layouts.dashboard.includes.navbar')
        <!-- Sidebar menu-->
        @include('layouts.dashboard.includes.sidebar')
        @yield('content')
        <!-- Essential javascripts for application to work-->
        <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('backend/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/js/main.js') }}"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
        <!-- Page specific javascripts-->
        <script type="text/javascript" src="{{ asset('backend/js/plugins/chart.js') }}"></script>
        <script type="text/javascript">
            var data = {
                labels: ["January", "February", "March", "April", "May"],
                datasets: [{
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 80, 81, 56]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 86]
                    }
                ]
            };
            var pdata = [{
                    value: 300,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Complete"
                },
                {
                    value: 50,
                    color: "#F7464A",
                    highlight: "#FF5A5E",
                    label: "In-Progress"
                }
            ]

            var ctxl = $("#lineChartDemo").get(0).getContext("2d");
            var lineChart = new Chart(ctxl).Line(data);

            var ctxp = $("#pieChartDemo").get(0).getContext("2d");
            var pieChart = new Chart(ctxp).Pie(pdata);

        </script>
        <!-- Google analytics script-->
        <script type="text/javascript">
            if (document.location.hostname == 'pratikborsadiya.in') {
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-72504830-1', 'auto');
                ga('send', 'pageview');
            }

        </script>
        @stack('js')
    </body>

</html>
