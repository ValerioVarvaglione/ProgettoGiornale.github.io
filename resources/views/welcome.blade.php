    <x-layout>

    @if (session('message'))
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
    <h2 class="my-5 fw-bold subTitle">Primo Piano</h2>
    <div class="row">
        <div class="col-12 col-md-6 my-3">
            @if(count($articles) >0)
                <img class="thumb" src="{{ count($articles)  >0 ? Storage::url($articles->first()->image) :'' }}">
                <h5 class="">
                    <a class="font-large" href="{{ route('article.show', $articles->first()) }}">
                        {{ $articles->first()->title }}
                    </a>
                </h5>
            @else
                <h2>Non ci sono nuovi articoli!</h2>
            @endif
        </div>
    
            <div class="col-12 col-md-6">
                <div class="row mb-5">
                    @foreach ($articles as $article)
                        @if ($loop->first)
                            @continue
                        @endif
                        <div class="col-12 col-md-6 my-2 card2 ">
                            <div class="card customCard">
                                <img class="customImg mt-2" src="{{ Storage::url($article->image) }}" alt="">
                                <div class="card-body">
                                    <h5 class="">
                                        <a href="{{route('article.show', $article)}}">
                                            {{ $article->title }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

  

    </x-layout>
