<div class="table-responsive">
    <table class="table table-striped table-hover border">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotilo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tags</th>
                <th scope="col">Creato il</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->category->name ?? 'Non sei categorizzato' }}</td>
                    <td>
                        @foreach ($article->tags as $tag)
                            {{ $tag->name }},
                        @endforeach
                    </td>
                    <td>{{$article->created_at->format('d/m/Y')}}</td>
                    <td class="d-flex flex-column align-items-center">
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white mx-3"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('article.edit', compact('article'))}}" class="btn btn-success text-white my-1 mx-3"><i class="fa-solid fa-pen"></i></a>
                        <form action="{{route('article.destroy', compact('article'))}}" method="post" 
                        
                        class="inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger mx-3"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>