<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Occhio del Reporter' }}</title>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </head>
      

    @vite (['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://kit.fontawesome.com/0723cff916.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Nunito+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Playfair+Display:wght@400;500;600&family=Tinos:wght@400;700&display=swap"
        rel="stylesheet">


        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>




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

            <div class="search-container ">

                <form class="boxSearchForm" action="{{ route('article.search') }}" method="GET" class="d-flex ">

                    <div class="inputs">
                        <input type="search" name="query" aria-label="Search" required>
                        <label class="fs-5">Cerca nel sito</label>
                        <button type="submit" class="btn-search "><i class="fa-solid fa-magnifying-glass icon-search "></i></button>
                    </div>
            
                    
                </form>
            </div>
        </div>
    </div>



    {{-- Offcanvans MENU --}}

    <div class="offcanvas offcanvas-start p-4" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">MENU</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div>
                <div class="container-fluid">
                    <h6 class="mt-5 fw-bold category-size">CATEGORIE:</h6>
                </div>
                    
                
                <div class="navbar-nav mx-auto p-3 nav-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark"
                            href="{{ route('article.byCategory', ['category' => 'sport']) }}">SPORT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Politica']) }}">POLITICA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Tech']) }}">TECH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Economia']) }}">ECONOMIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Food&Drink']) }}">FOOD AND DRINK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark"
                            href="{{ route('article.byCategory', ['category' => 'Intrattenimento']) }}">INTRATTENIMENTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('article.index') }}">TUTTI GLI ARTICOLI</a>
                    </li>

                  @if (Auth::user() && Auth::user()->is_writer || Auth::user() && Auth::user()->is_revisor || Auth::user() && Auth::user()->is_admin)
                    <div>
                        <h6 class="mt-5 fw-bold my-4 category-size">DASHBOARD:</h6>
                    </div>
                  @endif

                    @if (Auth::user() && Auth::user()->is_admin)
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                        class="text-black nav-link my-1">DASHBOARD AMMINISTRATORE</a>
                    </li>
                    @endif

                    @if (Auth::user() && Auth::user()->is_writer)
                    <li>
                        <a href="{{ route('writer.dashboard') }}"
                            class="text-black nav-link my-1">DASHBOARD REDATTORE</a>
                    </li>
                    @endif
                    @if (Auth::user() && Auth::user()->is_revisor)
                        <li>
                            <a href="{{ route('revisor.dashboard') }}"
                                class="text-black nav-link my-1">DASHBOARD REVISORE</a>
                        </li>
                    @endif
              
                </div>
            </div>
        </div>
    </div>














        {{ $slot }}









    <x-footer />
    
</body>


</html>
