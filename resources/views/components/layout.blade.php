<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Occhio del Reporter' }}</title>

    @vite (['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://kit.fontawesome.com/0723cff916.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Nunito+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Playfair+Display:wght@400;500;600&family=Tinos:wght@400;700&display=swap"
        rel="stylesheet">


    {{-- Front End Card --}}
    {{-- <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"

        crossorigin="anonymous"> --}}


</head>

<body>


    <x-navbar />



    {{-- Offcanvans Cerca --}}

         
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasTopLabel"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
       
        
        <div class="offcanvas-body mx-auto">

            <div class="search-container">

                <form class="boxSearchForm" action="{{ route('article.search') }}" method="GET" class="d-flex ">

                    <div class="inputs">
                        <input type="search" name="query" aria-label="Search"  required>
                        <label class="fs-5">Cerca nel sito</label>
                    </div>
            
                    <button type="submit" class="btn-search "><i class="fa-solid fa-magnifying-glass icon-search "></i></button>
                </form>
            </div>
        </div>
    </div>



    {{-- Offcanvans MENU --}}

    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">MENU</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>

                <div class="navbar-nav mx-auto p-3 ">
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-dark"
                            href="{{ route('article.byCategory', ['category' => 'sport']) }}">SPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Politica']) }}">POLITICA</a>
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Tech']) }}">TECH</a>
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Economia']) }}">ECONOMIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Food&Drink']) }}">FOOD AND DRINK</a>
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-dark"
                            href="{{ route('article.index') }}">TUTTI GLI ARTICOLI</a>
                    </li>
                </div>
            </div>
        </div>
    </div>


    
    
   
    








    {{ $slot }}









    <x-footer />

</body>

</html>