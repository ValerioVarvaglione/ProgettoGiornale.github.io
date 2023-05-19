<x-layout>

    <div class="container-fluid p-3 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class=" text-capitalize">
                Tutti gli articoli
            </h1>
        </div>
    </div>



    {{-- <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 indexColArticles">
                    <div class="card1 my-5">
                        <div class="card-image"><img src="{{ Storage::url($article->image) }}"
                                class="card-img-top indexCard" alt="..."></div>
                        <div class="category">
                            <h5 class="card-title"><a
                                    href="{{ route('article.show', $article) }}">{{ Str::limit($article->title, 20) }}
                            </h5>
                        </div>
                        <div class="heading">
                            <p class="card-text"><a
                                    href="{{ route('article.show', $article) }}">{{ Str::limit($article->subtitle, 33) }}
                            </p>
                            <div class="author indexAuthor"> By <a
                                    href="{{ route('article.user', ['user' => $article->user->id]) }}">{{ $article->user->name }}</a>
                                <span>il {{ $article->created_at->format('d/m/Y') }} </span>
                            </div>
                            <div class="d-flex">
                                @if ($article->category)
                                    <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                        class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                                @else
                                    <p class="small text-muted fst-italic text-capitalize">
                                        Non categorizzato
                                    </p>
                                @endif
        
                                <p class="small fst-italic text-capitalize mx-2">
                                    @foreach ($article->tags as $tag)
                                        #{{ $tag->name }}
                                    @endforeach
                                </p>
                                </div>
                            <a href="{{ route('article.show', $article) }}"
                                class="btn btn-secondary text-white my-2">Articolo Intero</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
        </div>
    </div> --}}

    <div class="container">
        <div class="row py-4">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 d-flex justify-content-center mb-4">
                    <div class="card-article">
                        <div class="image"><img class="image" src="{{ Storage::url($article->image) }}" alt=""></div>
                        <div class="content">
                        <a href="{{ route('article.show', $article) }}">{{ Str::limit($article->title,65) }}
                            <span class="title">
                            
                            </span>
                        </a>
                        
                        <a href="{{ route('article.show', $article) }}">
                            <p class="desc">{{ Str::limit($article->subtitle, 60) }}</p>
                        </a>
                        <a href="{{ route('article.show', $article) }}" class="action">
                            Leggi di più
                            <span aria-hidden="true">
                            →
                            </span>
                        </a>

                        <div class="indexAuthor mb-3 mt-3">
                            By <a
                            href="{{ route('article.user', ['user' => $article->user->id]) }}" class="">{{ $article->user->name }}</a>
                            <span class="">il {{ $article->created_at->format('d/m/Y') }} </span>
                        </div>
                        
                
                        <div class="d-flex">
                            @if ($article->category)
                                <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                                    class="small text-muted fst-italic text-capitalize py-1">{{ $article->category->name }} 
                                </a>
                            @else
                                <p class="small text-muted fst-italic text-capitalize">
                                    Non categorizzato
                                </p>
                            @endif
    
                            <span class="fst-italic text-capitalize mx-2 span-tags">
                                @foreach ($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </span>
                        </div>
                       
                        </div>
                    </div>
                    
            
                </div>
            @endforeach
        </div>
    </div>

</x-layout>

