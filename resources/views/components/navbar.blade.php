    <nav class="navbar navbar-expand-lg navbar-light bg-custom ">
     
    <a class="navbar-brand p-2" href="#"><img src="/media/occhio.png" class="img-custom"></a>
    <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="text-white"><i class="fa-solid fa-bars"></i></span>
    </button>
  
    <div class="container d-flex justify-content-center boxNavbar">
        <div class="row">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto p-3">
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white"  href="{{ route('article.byCategory', ['category' => 'sport']) }}">Sport</a> 
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white"  href="{{ route('article.byCategory', ['category' => 'Politica']) }}">Politica</a> 
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white"  href="{{ route('article.byCategory', ['category' => 'Tech']) }}">Tech</a> 
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white"  href="{{ route('article.byCategory', ['category' => 'Economia']) }}">Economia</a> 
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white"  href="{{ route('article.byCategory', ['category' => 'Food&Drink']) }}">Food And Drink</a>
                    </li>
                    <li class="nav-item">
                        <a class="borderLink nav-link link-custom text-white" href="{{ route('article.index') }}">Tutti gli articoli</a>
                    </li>



                    @if (Auth::user())
                    <li class="nav-item">
                        <a class="borderLink nav-link text-white" href="{{ route('article.create') }}">Inserisci articolo</a>
                    </li>
                    @endif
                    @if (Auth::user() && Auth::user()->is_revisor)
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white my-2" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                          Dashboard
                        </a>
                        @if (Auth::user() && Auth::user()->is_admin)
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a href="{{ route('revisor.dashboard') }}" class=" text-dark nav-link my-2">Dashboard del revisore</a>
                          <li><a href="{{ route('admin.dashboard') }}" class="borderLink text-dark nav-link link-custom my-2">Dashboard del amministratore</a>
                          
                        </ul>
                      </div>
                    </li>
                    @endif
                    
                    
                    </li>
                    @endif
                    @if (Auth::user())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <button class="button-logout" type="submit"><a class="borderLink nav-link text-black" href="{{ route('careers') }}"><i class="fa-solid fa-envelope mx-1"></i>Lavora con noi</a></button>
                            </li>
                            <li class="nav-item">
                                <form class="d-flex justify-content-center" action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="button-logout" type="submit"><i class="fa-solid fa-arrow-right-from-bracket text-black mx-1"></i>Logout</button>      
                                </form>  
                            </li>
                        </ul>
                      </li>  
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu customDropdown" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <a class="text-black nav-link @if (Route::currentRouteName() == 'register') active @endif" aria-current="page"
                                href="{{ route('register') }}"><i class="fa-solid fa-address-card mx-1"></i> Registrati</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="nav-item">
                                <a class="text-black nav-link @if (Route::currentRouteName() == 'login') active @endif" aria-current="page"
                                href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket mx-1"></i> Accedi</a>
                            </li>
                        </ul>
                    </li>
                </ul>    
                @endif 
            </div>
        </div>
    </div>
</nav>








