<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        .navbar { background-color: #484848; }
        .navbar .navbar-nav .nav-link { color: #fff; }
        .navbar .navbar-nav .nav-link:hover { color: #fbc531; }
        .navbar .navbar-nav .active > .nav-link { color: #fbc531; }

        footer a.text-light:hover { color: #fed136!important; text-decoration: none; }
        footer .cizgi { border-right: 1px solid #535e67; }
        @media (max-width: 992px) { footer .cizgi { border-right: none; } }
    </style>
</head>
<body>
<marquee width="60%" direction="right" height="100px">
    This is a sample scrolling text that has scrolls texts to right.
</marquee>
<header>
    <!--- Navbar --->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="#"><i class="fa fa-graduation-cap fa-lg mr-2"></i>BLOG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nvbCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="#"><i class="fa fa-home fa-fw mr-1"></i>Anasayfa</a>
                    </li>e
                    <li class="nav-item active pl-1">
                        <a class="nav-link" href="#"><i class="fa fa-th-list fa-fw mr-1"></i>Blog</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link" href="#"><i class="fa fa-info-circle fa-fw mr-1"></i>Hakkımızda</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!--# Navbar #-->
</header>

<!--- Footer --->
<footer>
    <div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
                    <div class="card bg-secondary border-0">
                        <div class="card-body text-light text-center">
                            <h5 class="card-title text-white display-4" style="font-size:30px">Telif Hakkı</h5>
                            <p class="d-inline lead">Tüm Hakları Saklıdır © 2018<br>
                                <a href="#" class="text-light d-block lead">Blog</a>
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
                    <div class="card bg-secondary border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title text-white display-4" style="font-size:30px">İletişim</h5>
                            <a class="text-light d-block lead" style="margin-left: -20px" href="#"><i class="fa fa-phone mr-2"></i>+90 (000) 000 0 000</a>
                            <a class="text-light d-block lead" href="#"><i class="fa fa-envelope mr-2"></i>admin@localhost.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card bg-secondary border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title text-white display-4" style="font-size:30px">Sosyal Medya</h5>

                            <a class="text-light" href="#"><i class="fa fa-facebook-square fa-fw fa-2x"></i></a>

                            <a class="text-light" href="#"><i class="fa fa-twitter-square fa-fw fa-2x"></i></a>

                            <a class="text-light" href="#"><i class="fa fa-instagram fa-fw fa-2x"></i></a>

                            <a class="text-light" href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--# Footer #-->
</body>
</html>
