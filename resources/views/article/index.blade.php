<x-layout>

    <div class="container-fluid p-3 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class=" display-4">
                Tutti gli articoli
            </h1>
        </div>
    </div>


    <div class="container">
        <div class="row py-4">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 d-flex justify-content-center mb-4">
                    <div class="card-article">
                        <div class="image"><img class="image" src="{{ Storage::url($article->image) }}" alt=""></div>
                        <div class="content ">
                        <a class="fw-bold" href="{{ route('article.show', $article) }}">{{ Str::limit($article->title,65) }}
                            <span class="title">
                            
                            </span>
                        </a>
                        
                        <a href="{{ route('article.show', $article) }}">
                            <p class="desc">{{ Str::limit($article->subtitle, 250) }}</p>
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

