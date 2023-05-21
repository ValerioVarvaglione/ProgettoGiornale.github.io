<x-layout>

    <div class="container-fluid p-3  text-dark">
        <div class= "row justify-content-center">
           
        </div>
    </div>


    <div class="container">
        <div class="row">
            
            
          
            <div class="col-12 mb-5">
                <h1 class="display-3 text-center fw-bold">
                    {{$article->title}}
                </h1>
                <h4 class=" my-3 px-0 fs-4 p-3">{{ $article->subtitle }}</h4>
                <div class="d-flex justify-content-center">
                    <img src="{{ Storage::url($article->image) }}" class=" my-2 img-show " alt="">
                </div>
                <p class="fs-5">{{$article->body}}</p>
            </div>
            <div class="col-12 d-flex justify-content-between">

                <p class="fs-6 ">Redatto da <span class="text-muted fst-italic">{{$article->user->name}}</span>  il <span class="text-muted fst-italic">{{$article->created_at->format('d/m/Y')}}</span></p>
                <p class="fs-6 fst-italic text-capitalize mx-2">
                    @foreach ($article->tags as $tag)
                        #{{ $tag->name }}
                    @endforeach
                </p>

            </div>
        </div>
    </div>
    <div class="text-center">
        <a  href="{{ route('home') }}"><button class="my-4 mx-2 btn btn-my2">Torna alla home</button></a>
        @if (Auth::user() && Auth::user()->is_revisor)
        <button class="my-4 mx-2 btn btn-my text-white"> <a class="text-decoration-none text-white" href="{{ route('revisor.acceptArticle', compact('article'))}}" class=" text-white my-3 mx-2">Accetta articolo</a></button>
        <button class="my-4 mx-2 btn btn-my3 text-white"><a class="text-decoration-none text-white" href="{{ route('revisor.rejectArticle', compact('article'))}}" class="text-white my-3">Rifiuta articolo</a></button>
       
      
    @endif
    </div>

    </x-layout>
