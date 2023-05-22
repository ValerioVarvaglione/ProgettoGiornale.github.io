<nav id="navbarColor" class="navbar navbar-expand-lg navbar-light bg-custom">
        <div class="d-flex align-items-center justify-content-between justify-content-md-center bg-custom w-100">
            <img src="/media/occhio.png" class="navbarLogo">
        
            <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-white"><i class="fa-solid fa-bars"></i></span>
            </button>
        


        </div>
        






    <div class="container d-flex justify-content-center">
        <div class="row w-100">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav p-3 w-100 justify-content-center">
                    <li id="menu" class="nav-item">
                        <a type="button" class="nav-link " data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                            aria-controls="staticBackdrop">
                            <i class="fa-solid fa-bars text-white"></i> <span  class="text-white fw-bold mx-2">Menu</span>
                        </a>
                    </li>
                    <li id="navLogo1" class="d-none mt-2"><a href="#"><img class="img-fluid" src="/media/occhio2.png" 
                        ></a>
                    </li>

                    <li class="nav-item central-links">
                        <a class="nav-link link-custom text-white fw-bold" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item central-links">
                        <a class="nav-link link-custom text-white fw-bold" href="{{ route('article.index') }}">Tutti gli articoli</a>
                    </li>





                    @if (Auth::user())
                        <li class="nav-item central-links">
                            <a class="nav-link text-white fw-bold" href="{{ route('article.create') }}">Inserisci articolo
                            </a>
                        </li>
                    @endif
                    @if (Auth::user())
                        <li class="nav-item dropdown central-links">
                            <a class="nav-link dropdown-toggle text-white fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Benvenuto {{strtoupper(Auth::user()->name) }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                    <button class="button-logout" type="submit"><a
                                            class="text-black" href="{{ route('careers') }}"><i
                                                class="fa-solid fa-envelope mx-1"></i> Lavora con noi</a></button>
                                </li>
                                <li class="nav-item">
                                    <form class="d-flex mx-3" action="{{ route('logout') }}"
                                        method="post">
                                        @csrf
                                        <button class="button-logout" type="submit"><i
                                                class="fa-solid fa-arrow-right-from-bracket text-black "></i>
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
                                            class="fa-solid fa-address-card" mx-1></i>  Registrati</a>
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
                    <li id="search" class="nav-item ">
                        <a type="button" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                            aria-controls="offcanvasTop"><i class="fa-solid fa-magnifying-glass text-white"></i><span class="text-white mx-2 fw-bold">Cerca</span></a>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    
</nav>



