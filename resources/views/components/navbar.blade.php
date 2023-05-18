<nav class="navbar navbar-expand-lg navbar-light bg-custom " id="navbarColor">
    <div class="d-flex align-items-center justify-content-between">

        <a class="navbar-brand p-2" href="#"><img src="/media/occhio.png" class="img-custom"></a>


    </div>

    <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="text-white"><i class="fa-solid fa-bars"></i></span>
    </button>






    <div class="container d-flex justify-content-center boxNavbar ">
        <div class="row">
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav mx-auto p-3">
                    <li class="nav-item">
                        <a type="button" class="nav-link " data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                            aria-controls="staticBackdrop">
                            <i class="fa-solid fa-bars text-white"></i> <span class="text-white mx-1">Menu</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white" href="{{ route('article.index') }}">Tutti
                            gli articoli</a>
                    </li>





                    @if (Auth::user())
                        <li class="nav-item">
                            <a class="borderLink nav-link text-white" href="{{ route('article.create') }}">Inserisci
                                articolo</a>
                        </li>
                    @endif
                    @if (Auth::user() && Auth::user()->is_revisor)
                        <li><a href="{{ route('revisor.dashboard') }}"
                                class="borderLink text-white nav-link link-custom my-2">Dashboard revisore</a>
                        </li>
                    @endif
                    @if (Auth::user() && Auth::user()->is_admin)
                        <li><a href="{{ route('admin.dashboard') }}"
                                class="borderLink text-white nav-link link-custom my-2">Dashboard amministratore</a>
                        </li>
                    @endif
                    @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Benvenuto {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <button class="button-logout" type="submit"><a
                                            class="borderLink nav-link text-black" href="{{ route('careers') }}"><i
                                                class="fa-solid fa-envelope mx-1"></i> Lavora con noi</a></button>
                                </li>
                                <li class="nav-item">
                                    <form class="d-flex justify-content-center" action="{{ route('logout') }}"
                                        method="post">
                                        @csrf
                                        <button class="button-logout" type="submit"><i
                                                class="fa-solid fa-arrow-right-from-bracket text-black mx-1"></i>
                                            Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu customDropdown" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <a class="text-black nav-link @if (Route::currentRouteName() == 'register') active @endif"
                                        aria-current="page" href="{{ route('register') }}"><i
                                            class="fa-solid fa-address-card mx-1"></i> Registrati</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="nav-item">
                                    <a class="text-black nav-link @if (Route::currentRouteName() == 'login') active @endif"
                                        aria-current="page" href="{{ route('login') }}"><i
                                            class="fa-solid fa-right-to-bracket mx-1"></i> Accedi</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a type="button" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                            aria-controls="offcanvasTop"><i class="fa-solid fa-magnifying-glass text-white"></i><span
                                class="text-white mx-1">Cerca</span></a>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    
</nav>
