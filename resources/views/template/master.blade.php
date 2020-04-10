<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>E-BKK</title>
</head>

<body class="container-fluid">
    <header>
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0f4c81;">
                <div class="row">
                    <span class="navbar-brand ml-3 col-1">
                        <img src="{{ ('logo-wk.png') }}" width="70" class="mt-1 d-inline-block align-top" alt="">
                        <span class="navbar-text ml-4 text-break text-white">
                            <p class="h5">BURSA KERJA KHUSUS</p>
                            <p class="h6">SMK WIKRAMA BOGOR</p>
                        </span>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </span>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-6 text-uppercase">
                        <a class="nav-item nav-link mr-5 h6" href="#">Beranda <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link mr-5 h6" href="#">Lowongan</a>
                        <!-- <a class="nav-item nav-link mr-5 h5" href="#">User</a> -->
                    </div>
                </div>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </nav>
        </div>
    </header>

    <!-- <div class="container content mt-5">
        <div class="row">
            <div class="col-md-6 mt-5" id="piechart"></div>
            <div class="col-md-6 mt-5">
                <div class="row">
                    <span class="h4 mt-5 ml-3">Lowongan Terbaru</span>
                </div>
                <div class="card mt-2" style="width: 20rem;" data-spy="scroll" data-offset="0">
                    <div class="card-body">
                        <div class="card-body border">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                        <div class="card-body border mt-2">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                        <div class="card-body border mt-2">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    @yield('konten')

    <footer class="">

        <div style="background-color: #0f4c81;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center mt-5">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->
            </div>


            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5 text-white">

                <!-- Grid row -->
                <div class="row mt-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <!-- Content -->
                        <img src="assets/logo-wk.png" width="70" class="d-inline align-middle" alt="">
                        <h6 class="text-uppercase font-weight-bold d-inline">SMK WIKRAMA BOGOR</h6>
                        <!-- <hr class="deep-purple accent-2 mb-4 mt-3 d-inline-block mx-auto" style="width: 60px;"> -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Media Sosial</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="https://www.instagram.com/smkwikrama/"><i class="fab fa-instagram"></i>
                                @smkwikrama</a>
                        </p>
                        <p>
                            <a href="https://web.facebook.com/pages/SMK-Wikrama-Bogor/51870946745"><i class="fab fa-facebook-square"></i> SMK Wikrama Bogor</a>
                        </p>
                        <p>
                            <a href="https://twitter.com/smkwikrama"><i class="fab fa-twitter-square"></i>
                                @smkwikrama</a>
                        </p>
                        <p>
                            <a href="https://www.youtube.com/channel/UCyhEUzlXbXet57qFnDfdWuw"><i class="fab fa-youtube"> Multimedia Wikrama</i></a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Kontak</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-school mr-3 align-center"></i> Jl. Raya Wangun
                            Kelurahan Sindangsari
                            Bogor Timur 16720</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i>prohumasi@smkwikrama.sch.id</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i>0251-8242411</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-white">Copyright © 2020 - SMK Wikrama Bogor. All Right Reserved.
            </div>
            <!-- Copyright -->
        </div>
    </footer>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Bekerja', 8],
                ['Kuliah', 2],
                ['Wirausaha', 4]
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Jalur yang Ditempuh Alumni Setelah Lulus',
                'width': 550,
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>