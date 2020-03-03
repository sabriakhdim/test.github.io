<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/transparent.png') }}">

    <!-- Pour les icons facebook et instagram du footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- IMPORTANT : DEBUT -->
    <link rel="stylesheet" href="{{URL::asset('css/template.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- IMPORTANT : FIN -->

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    @yield('head')

</head>
<div id="loading">
</div>

<body onload="closeLoading()">

    <header id="header">
        <nav class="navbar navbar-expand-md navbar-custom2 fixed-top navbar-light ">

            <!--  Show this only on mobile to medium screens  -->
            <a class="navbar-brand d-md-none logo" href="{{action('MyController@index')}}"><img
                    src="{{ asset('images/lemonde.png') }}" height="50.6px" width="155.6px"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
                aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--  Use flexbox utility classes to change how the child elements are justified  -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarToggle">

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Porfolio
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item"
                                href="{{action('DropboxController@getFromDropbox','Maternity')}}">Maternity</a>
                            <a class="dropdown-item"
                                href="{{action('DropboxController@getFromDropbox','Newborn')}}">Newborn</a>
                            <a class="dropdown-item"
                                href="{{action('DropboxController@getFromDropbox','Sitters')}}">Sitters</a>
                            <a class="dropdown-item"
                                href="{{action('DropboxController@getFromDropbox','Family')}}">Family</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('MyController@tarif')}}">Tarif</a>
                    </li>
                </ul>

                <!--   Show this only lg screens and up   -->
                <a class="navbar-brand d-none d-md-block " href="{{action('MyController@index')}}">
                    <img src="{{ asset('images/lemonde.png') }}" height="50.6px" width="155.6px">
                </a>


                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            à propos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="nav-link" href="{{action('MyController@infoSceance')}}">infos scéances </a>
                            <a class="dropdown-item" href="/albums/Newborn">Newborn</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action('MyController@contact')}}">CONTACT</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url({{ asset('images/homePage/9121.jpg') }});">
            </div>
            <div class="carousel-item" style="background-image: url({{ asset('images/homePage/9122.jpg') }});">
            </div>
            <div class="carousel-item" style="background-image: url({{ asset('images/homePage/9121.jpg') }});">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script>
        function closeLoading() {
            document.getElementById('loading').style.display = 'none';
        }

        function openLoading() {
            document.getElementById('loading').style.display = 'block';
        }

        document.addEventListener('contextmenu', event => event.preventDefault());


    </script>
</body>
@yield('script')

</html>
