<x-layout>

    <div class="container-fluid p-5  text-center text-dark">
        <div class="row justify-content-center">
            <h1 class=" text-capitalize">
                Tutti gli articoli
            </h1>
        </div>
    </div>




    {{-- <div class="container my-5">
    <div class="row justify-content-around">
        @foreach ($articles as $article)
            <div class="col-12 col-md-3 my-5">
                <div class="card boxCard">
                    <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                    <div class="card-body p-2 cardCustom">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <p class="small text-muted text-capitalize">Autore: <a href="{{ route('article.user', ['user'=> $article->user->id])}}">{{ $article->user->name }}</a></p>
                        <p class="small text-muted text-capitalize">Categoria: <a href="{{ route('article.byCategory', ['category' => $article->category->name]) }}" class="">{{$article->category->name}}</a></p>
                        <a href="{{route('article.show', $article)}}" class="btn btn-dark text-white">Articolo Intero</a>
                    </div>
                    <div class="card-footer text-white d-flex justofy-content-between align-items-center">
                        Redatto il {{ $article->created_at->format('d/m/Y') }} 
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <p class="small fst-italic text-capitalize">
                    @foreach ($article->tags as $tag)
                        #{{ $tag->name }}
            @endforeach
                </p>
                @if ($article->category)
                    <a href="{{ route('article.byCategory', ['category' => $article->category->id]) }}"
                        class="small text-muted fst-italic text-capitalize">{{ $article->category->name }}</a>
                @else
                    <p class="small text-muted fst-italic text-capitalize">
                        Non categorizzato
                    </p>
                @endif

                <div class="col-12 col-md-3 indexColArticles">
                    <div class="card1 my-3">
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
                            <a href="{{ route('article.show', $article) }}"
                                class="btn btn-secondary text-white my-2">Articolo Intero</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
            
        </div>
    </div>

</x-layout>
