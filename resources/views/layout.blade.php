
<!DOCTYPE html>
    <html lang="de">
    <head>

	        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<br />

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="/swiper-bundle.min.css">
        <link rel="stylesheet" href="/styles.css">
        <link rel="stylesheet" href="/sidebar.css">
        <link rel="stylesheet" href="/bootstrap.min.css">
        <link rel="stylesheet" href="/aos.min.css">
        <link rel="stylesheet" href="/Navbar-Right-Links-icons.css">
@yield('head')
    </head>
    <body> 
	        <header class="header" id="header">
            <nav class="navbar navbar-light navbar-expand-md fixed-top py-3" style="--bs-body-bg: var(--bs-navbar-color);backdrop-filter: blur(100px);-webkit-backdrop-filter: blur(100px);">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="#"><span>Allegra</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown">Unsere Dienstleitungen&nbsp;</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="/wohnimmobilien">Wohnimmobilien</a><a class="dropdown-item" href="/gewerbeimmobilien">Gewerbeimmobilien</a><a class="dropdown-item" href="/sonderimmobilien">Sonderimmobilien</a><a class="dropdown-item" href="/grundstuecke-und-rechte">Grundstücke &amp; Rechte</a><a class="dropdown-item" href="/landwirtschaftliche-immobilien">Landwirtschaftliche Immobilien</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/ueber-uns">Über Uns</a></li>
                </ul>
            </div>
        </div>
    </nav>
        </header>

@yield('content')


	        <!--==================== FOOTER ====================-->
@if(str_contains(url()->current(), "/immobilienbewertung/"))
@include('partials._footer2')
@else
@include('partials._footer')
@endif

        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <script src="{{asset('js/scrollreveal.min.js')}}"></script>
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>