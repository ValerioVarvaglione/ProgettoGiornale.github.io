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
            <div class="col-12 col-md-3 indexColArticles">
                <div class="card1 my-3">
                    <div class="card-image"><img src="{{ Storage::url($article->image) }}" class="card-img-top indexCard" alt="..."></div>
                    <div class="category"> <h5 class="card-title"><a href="{{ route('article.show', $article) }}">{{ Str::limit($article->title, 20)}}</h5> </div>
                    <div class="heading"> <p class="card-text"><a href="{{ route('article.show', $article) }}">{{ Str::limit($article->subtitle, 33)}}</p>
                        <div class="author indexAuthor"> By <a href="{{ route('article.user', ['user'=> $article->user->id])}}">{{ $article->user->name }}</a> <span >il {{ $article->created_at->format('d/m/Y') }} </span></div>
                        <a href="{{route('article.show', $article)}}" class="btn btn-secondary text-white my-2">Articolo Intero</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </x-layout>