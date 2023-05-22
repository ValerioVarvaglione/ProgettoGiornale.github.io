<x-layout>


    <div class="news-bar">
        <div>
            <span class="live-news text-dark fw-bold">LIVE NEWS</span>
        </div>
        <span class="dot"></span>
       <marquee behavior="scroll" direction="left">
          <span id="news" class="text-dark wordNews"></span>
        </marquee>
    </div>
    
    


     {{-- Meteo --}}

     @if (session('message'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="my-5 container">
        <a class="weatherwidget-io" href="https://forecast7.com/en/41d9012d50/rome/" data-label_1="ROMA"
            data-label_2="WEATHER">ROMA WEATHER</a>
        <script>
            ! function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://weatherwidget.io/js/widget.min.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'weatherwidget-io-js');
        </script>
    </div>







    {{-- Primo Piano --}}



    <div class="container">

        <h1 class="my-5 fw-bold subTitle">Primo Piano <span class="d-flex justify-content-end">
                <h5 class="news p-1"> News</h5>
            </span></h1>


        <div class="row">
            <div class="col-12 col-md-5 my-3 col-sm-12 mx-3">

                @if (count($articles) > 0)
                    <a id="category" href="{{ route('article.byCategory', ['category' => $articles->first()->category->name]) }}"
                        class="small text-muted fst-italic text-capitalize">{{ $articles->first()->category->name }}</a>
                    <img class="thumb" src="{{ count($articles) > 0 ? Storage::url($articles->first()->image) : '' }}">
                    <h1 class="hover-underline-animation fs-5">
                        <a class="" href="{{ route('article.show', $articles->first()) }}">
                            {{ $articles->first()->title }}
                        </a>
                    </h1>
                    <div class="d-flex justify-content-between">
                        <p class="small text-muted text-capitalize fst-italic"><i class="fa-regular fa-user mx-2"></i>Autore:
                            {{ $articles->first()->user->name }} il {{ $articles->first()->created_at->format('d/m/Y') }}</p>
                        <p class="small fst-italic text-capitalize ">
                            #{{ $articles->first()->tags->last()->name }}
                        </p>
                        
                    </div>
                @else
                    <h2>Non ci sono nuovi articoli!</h2>
                @endif
            </div>

            <div class="col-12 col-md-6 col-sm-12 card2">
                <div class="row mb-5">


                    @foreach ($articles->take(5) as $article)
                        @if ($loop->first)
                            @continue
                        @endif
                        <div class="col-12 col-md-6 my-2 ">
                            <div class="justify-content-center d-flex align-items-center flex-column">
                                <div class="card customCard">
                                        @if ($article->category)
                                        <a class=" small text-muted fst-italic text-capitalize" href="{{ route('article.byCategory', ['category' => $article->category->name]) }}"
                                            class="">{{ $article->category->name }}</a>
                                        @else
                                        <p class="small text-muted fst-italic text-capitalize">
                                            Non categorizzato
                                        </p>
                                        @endif
                                    
                                    <div class="">
                                        <img class="customImg mt-2 " src="{{ Storage::url($article->image) }}" alt="">
                                        <h5 class="hover-underline-animation font-title">
                                            <a href="{{ route('article.show', $article) }}">
                                                {{ $article->title }}
                                            </a>
                                        </h5>
                                        <div class="d-flex justify-content-between">
                                            <p class="small text-muted text-capitalize fst-italic"><i
                                                    class="fa-regular fa-user mx-1 "></i>Autore:
                                                {{ $article->user->name }} il {{ $articles->first()->created_at->format('d/m/Y') }}</p>
                                            <p class="small fst-italic text-capitalize">
                                                @foreach ($article->tags as $tag)
                                                    #{{ $tag->name }}
                                                @endforeach
                                            </p>
                                            
                                        </div>
                                       
                                  
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    {{-- Sezione Sport --}}


    <div class="container">
        <div class="row mx-auto">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore">Sport</h2>
            </div>
            
        </div>
        
        <div class="row mb-5  justify-content-around">
            @foreach ($articles->where('category_id', 4)->take(5) as $article)
                
                <div class="col-12 col-md-3 my-2 d-flex justify-content-center">
                    
                    <div class="card-article1">
                    @if ($article->category)
                    <div class="d-flex justify-content-between pb-2">
                       
                        <a class=" small text-muted fst-italic text-capitalize" href="{{ route('article.byCategory', ['category' => $article->category->name]) }}"
                            class="">{{ $article->category->name }}</a>
                            <span class="text-muted small fst-italic">tempo di lettura {{$article->readDuration()}} min</span>
                    </div>
                    
                        
                    @else
                    <p class="small text-muted fst-italic text-capitalize">
                        Non categorizzato
                    </p>
                    @endif
                        <div class="image"><img class="image" src="{{ Storage::url($article->image) }}" alt=""></div>
                        <div class="content p-0">
                            <a class="title-category" href="{{ route('article.show', $article) }}">{{ Str::limit($article->title,70) }}</a>
                            <a href="{{ route('article.show', $article) }}">
                                <p class="desc">{{ Str::limit($article->subtitle, 120) }}</p>
                            </a>
                            <div class="d-flex">

                                <p class="small text-muted text-capitalize fst-italic"><i
                                    class="fa-regular fa-user small">
                                    </i>
                                    {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}
                                </p>
                                </div>
                            <p class="small fst-italic text-capitalize">
                                @foreach ($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>


    {{-- Sezione Politica --}}


    <div class="container">
        <div class="row mx-auto">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore1">Politica</h2>
            </div>
            
        </div>
        
        <div class="row mb-5  justify-content-around">
            @foreach ($articles->where('category_id', 1)->take(5) as $article)
                
                <div class="col-12 col-md-3 my-2 d-flex justify-content-center">
                    
                    <div class="card-article1">
                    @if ($article->category)
                    <div class="d-flex justify-content-between pb-2">
                       
                        <a class=" small text-muted fst-italic text-capitalize" href="{{ route('article.byCategory', ['category' => $article->category->name]) }}"
                            class="">{{ $article->category->name }}</a>
                            <span class="text-muted small fst-italic">tempo di lettura {{$article->readDuration()}} min</span>
                    </div>
                    
                        
                    @else
                    <p class="small text-muted fst-italic text-capitalize">
                        Non categorizzato
                    </p>
                    @endif
                        <div class=""><img class="image" src="{{ Storage::url($article->image) }}" alt=""></div>
                        <div class="content p-0">
                            <a class="title-category" href="{{ route('article.show', $article) }}">{{ Str::limit($article->title,70) }}</a>
                            <a href="{{ route('article.show', $article) }}">
                                <p class="desc">{{ Str::limit($article->subtitle, 120) }}</p>
                            </a>
                            <div class="d-flex">

                                <p class="small text-muted text-capitalize fst-italic"><i
                                    class="fa-regular fa-user small">
                                    </i>
                                    {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}
                                </p>
                                </div>
                            <p class="small fst-italic text-capitalize">
                                @foreach ($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

    
   {{-- Sezione Tech --}}

    <div class="container">
        <div class="row mx-auto">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore2">Tech</h2>
            </div>
            
        </div>


        <div class="row mb-5  justify-content-around">
            @foreach ($articles->where('category_id', 6)->take(5) as $article)
                
                <div class="col-12 col-md-3 my-2 d-flex justify-content-center">
                    
                    <div class="card-article1">
                    @if ($article->category)
                    <a class=" small text-muted fst-italic text-capitalize" href="{{ route('article.byCategory', ['category' => $article->category->name]) }}"
                        class="">{{ $article->category->name }}</a>
                    @else
                    <p class="small text-muted fst-italic text-capitalize">
                        Non categorizzato
                    </p>
                    @endif
                        <div class="image"><img class="image" src="{{ Storage::url($article->image) }}" alt=""></div>
                        <div class="content p-0">
                            <a class="title-category" href="{{ route('article.show', $article) }}">{{ Str::limit($article->title,70) }}</a>
                            <a href="{{ route('article.show', $article) }}">
                                <p class="desc">{{ Str::limit($article->subtitle, 120) }}</p>
                            </a>
                            <div class="d-flex justify-content-between">
                                <p class="small text-muted text-capitalize fst-italic"><i
                                        class="fa-regular fa-user mx-2 "></i>Autore:
                                    {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}</p>
                                <p class="small fst-italic text-capitalize">
                                    @foreach ($article->tags as $tag)
                                        #{{ $tag->name }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    {{-- Sezione Economia --}}


    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore3">Economia</h2>
            </div>
            
        </div>
    </div>



        <div class="row mb-5  justify-content-around">
            @foreach ($articles->where('category_id', 2)->take(5) as $article)
                
                <div class="col-12 col-md-3 my-2 d-flex justify-content-center">
                    
                    <div class="card-article1">
                    @if ($article->category)
                    <a class=" small text-muted fst-italic text-capitalize" href="{{ route('article.byCategory', ['category' => $article->category->name]) }}"
                        class="">{{ $article->category->name }}</a>
                    @else
                    <p class="small text-muted fst-italic text-capitalize">
                        Non categorizzato
                    </p>
                    @endif
                        <div class="image"><img class="image" src="{{ Storage::url($article->image) }}" alt=""></div>
                        <div class="content p-0">
                            <a class="title-category" href="{{ route('article.show', $article) }}">{{ Str::limit($article->title,70) }}</a>
                            <a href="{{ route('article.show', $article) }}">
                                <p class="desc">{{ Str::limit($article->subtitle, 120) }}</p>
                            </a>
                            <div class="d-flex justify-content-between">
                                <p class="small text-muted text-capitalize fst-italic"><i
                                        class="fa-regular fa-user mx-2 "></i>Autore:
                                    {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}</p>
                                <p class="small fst-italic text-capitalize">
                                    @foreach ($article->tags as $tag)
                                        #{{ $tag->name }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        {{-- Sezione Food & Drink --}}

    </div>

    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore4">Food & Drink <div class="riquadro4"></div>
                </h2>
            </div>
          
        </div>
    </div>



        <div class="row mb-5 w-100 justify-content-around">
            @foreach ($articles->where('category_id', 3)->take(5) as $article)
                <div class="col-12 col-md-2 mx-2 my-2 card2 d-flex justify-content-center">
                    <div class="card customCard customCard1">
                        <img class="customImg1 mt-2" src="{{ Storage::url($article->image) }}" alt="">
                        <div class="card-body">
                            <h6 class="fw-bold hover-underline-animation title-section">
                                <a href="{{ route('article.show', $article) }}">
                                    {{ $article->title }}
                                </a>
                            </h6>
                            <div>
                                <p class="small text-muted text-capitalize"><i
                                        class="fa-regular fa-user mx-2"></i>Autore:
                                    {{ $articles->first()->user->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>


    {{-- Sezione Intrattenimento --}}

    <div class="container">
        <div class="row mx-auto">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore1">Intrattenimento</h2>
            </div>
            
        </div>
        
        <div class="row mb-5  justify-content-around">
            @foreach ($articles->where('category_id', 5)->take(5) as $article)
                
                <div class="col-12 col-md-3 my-2 d-flex justify-content-center">
                    
                    <div class="card-article1">
                    @if ($article->category)
                    <div class="d-flex justify-content-between pb-2">
                       
                        <a class=" small text-muted fst-italic text-capitalize" href="{{ route('article.byCategory', ['category' => $article->category->name]) }}"
                            class="">{{ $article->category->name }}</a>
                            <span class="text-muted small fst-italic">tempo di lettura {{$article->readDuration()}} min</span>
                    </div>
                    
                        
                    @else
                    <p class="small text-muted fst-italic text-capitalize">
                        Non categorizzato
                    </p>
                    @endif
                        <div class="image"><img class="image" src="{{ Storage::url($article->image) }}" alt=""></div>
                        <div class="content p-0">
                            <a class="title-category" href="{{ route('article.show', $article) }}">{{ Str::limit($article->title,70) }}</a>
                            <a href="{{ route('article.show', $article) }}">
                                <p class="desc">{{ Str::limit($article->subtitle, 120) }}</p>
                            </a>
                            <div class="d-flex">

                                <p class="small text-muted text-capitalize fst-italic"><i
                                    class="fa-regular fa-user small">
                                    </i>
                                    {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}
                                </p>
                                </div>
                            <p class="small fst-italic text-capitalize">
                                @foreach ($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>


    {{-- Sezione LiveNews --}}

    <div class="container box-swiper">
        <div class="row">
            <h2 class="my-5 fw-bold subTitle ">LIVE:NEWS</h2>
        <div class="col-12 p-0">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide col-12 col-md-6"><iframe width="560" height="315" src="https://www.youtube.com/embed/9Auq9mYxFEE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                  <div class="swiper-slide col-12 col-md-6"><iframe width="560" height="315" src="https://www.youtube.com/embed/pUcmpyynASM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                  <div class="swiper-slide col-12 col-md-6"><iframe width="560" height="315" src="https://www.youtube.com/embed/HVB_Wx5T16g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                  <div class="swiper-slide col-12 col-md-6"><iframe width="560" height="315" src="https://www.youtube.com/embed/21X5lGlDOfg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                  <div class="swiper-slide col-12 col-md-6"><iframe width="560" height="315" src="https://www.youtube.com/embed/XmkHyAejK4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                  <div class="swiper-slide col-12 col-md-6"><iframe width="560" height="315" src="https://www.youtube.com/embed/URQtYtS7qrI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                </div>
                <div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    
                </div>
                
              </div>
            
        </div>
        </div>
    </div>

   
</x-layout>

                
