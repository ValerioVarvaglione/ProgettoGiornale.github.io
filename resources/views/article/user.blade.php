<x-layout>

    <div class="container-fluid p-5  text-center text-dark">
        <div class= "row justify-content-center">
            <h1 class=" text-capitalize">
                Autore: {{$user->name}}
            </h1>
        </div>   
    </div>
    
    
    <div class="container my-5">
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
                        <div class="card-footer d-flex justofy-content-between align-items-center text-white">
                            Redatto il {{ $article->created_at->format('d/m/Y') }} 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </x-layout>