<x-layout>


    <div class="news-bar">
        <div>
            <span class="live-news">LIVE NEWS</span>
        </div>
        <span class="dot"></span>
       <marquee behavior="scroll" direction="left">
          <span id="news"></span>
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
            <div class="col-12 col-md-6 my-3 col-sm-12">

                @if (count($articles) > 0)
                    <a id="category" href="{{ route('article.byCategory', ['category' => $articles->first()->category->name]) }}"
                        class="small text-muted fst-italic text-capitalize">{{ $articles->first()->category->name }}</a>
                    <img class="thumb" src="{{ count($articles) > 0 ? Storage::url($articles->first()->image) : '' }}">
                    <h1 class="hover-underline-animation">
                        <a class="" href="{{ route('article.show', $articles->first()) }}">
                            {{ $articles->first()->title }}
                        </a>
                    </h1>
                    <div class="d-flex justify-content-between">
                        <p class="small text-muted text-capitalize"><i class="fa-regular fa-user mx-2"></i>Autore:
                            {{ $articles->first()->user->name }} </p>
                        <p class="small fst-italic text-capitalize">
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
                        <div class="col-12 col-md-6 my-2 d-flex justify-content-center align-items-center flex-column">
                            @if ($article->category)
                                <a href="{{ route('article.byCategory', ['category' => $article->category->name]) }}"
                                    class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                            @else
                                <p class="small text-muted fst-italic text-capitalize">
                                    Non categorizzato
                                </p>
                            @endif
                            <div class="card customCard">
                                <img class="customImg mt-2 " src="{{ Storage::url($article->image) }}" alt="">
                                <div class="card-body">
                                    <h5 class="hover-underline-animation font-title">
                                        <a href="{{ route('article.show', $article) }}">
                                            {{ $article->title }}
                                        </a>
                                    </h5>
                                    <div class="d-flex justify-content-between">
                                        <p class="small text-muted text-capitalize"><i
                                                class="fa-regular fa-user mx-2"></i>Autore:
                                            {{ $article->user->name }}</p>
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
            </div>
        </div>
    </div>



    {{-- Sezione Sport --}}


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore">Sport</h2>
            </div>
            
        </div>





        <div class="row mb-5 w-100 justify-content-around mx-auto">
            @foreach ($articles->where('category_id', 4)->take(5) as $article)
                <div class="col-12 col-md-2 my-2 card2 d-flex justify-content-center">
                    <div class="card customCard customCard1">
                        <img class="customImg1" src="{{ Storage::url($article->image) }}" alt="">
                        <div class="card-body">
                            <h6 class="hover-underline-animation title-section">
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


    {{-- Sezione Politica --}}


    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore1">Politica</h2>
            </div>
        </div>



        <div class="row mb-5 w-100 justify-content-around">
            @foreach ($articles->where('category_id', 1)->take(5) as $article)
                <div class="col-12 col-md-2 my-2 card2 d-flex justify-content-center">
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



    {{-- Sezione Tech --}}

    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore2">Tech</h2>
            </div>
        </div>



        <div class="row mb-5 w-100 justify-content-around">
            @foreach ($articles->where('category_id', 6)->take(5) as $article)
                <div class="col-12 col-md-2 my-2 card2 d-flex justify-content-center">
                    <div class="card customCard customCard1">
                        <img class="customImg1 mt-2" src="{{ Storage::url($article->image) }}" alt="">
                        <div class="card-body">
                            <h5 class="fw-bold hover-underline-animation title-section">
                                <a href="{{ route('article.show', $article) }}">
                                    {{ $article->title }}
                                </a>
                            </h5>
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


    {{-- Sezione Economia --}}


    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore3">Economia</h2>
            </div>
            
        </div>



        <div class="row mb-5 w-100 justify-content-around">
            @foreach ($articles->where('category_id', 2)->take(5) as $article)
                <div class="col-12 col-md-2 my-2 card2 d-flex justify-content-center">
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

        {{-- Sezione Food & Drink --}}

    </div>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5 fw-bold subTitle1 contenitore4">Food & Drink <div class="riquadro4"></div>
                </h2>
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

    <div class="container ">
        <div class="row">
            <div class="col">
                <h2 class="my-5 fw-bold subTitle1 contenitore5">Intrattenimento</h2>
            </div>
        </div>



        <div class="row mb-5 w-100 justify-content-around">
            @foreach ($articles->where('category_id', 5)->take(5) as $article)
                <div class="col-12 col-md-2 my-2 card2 d-flex justify-content-center">
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

        {{-- Sezione LiveNews --}}

    <div class="container">
        <div class="row">
            <h2 class="my-5 fw-bold subTitle contenitore6">LIVE:NEWS<div class="blink_text"></div>
            </h2>
            <div class="col-12 col-md-6">

                <iframe class="boxFrame" src="https://www.youtube.com/embed/HVB_Wx5T16g" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md-6">
                <iframe class="mb-5 boxFrame" src="https://www.youtube.com/embed/nTWOaWXmo0Y?controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>

    </div>


    </div>


</x-layout>