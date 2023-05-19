<div class="table-responsive">
    <table class="table table-striped table-hover border">
        <thead class="table-dark revisorForm">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($roleRequests as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @switch($role)
                    @case('amministratore')
                    <a class="btn btn-info text-white revisorForm" href="{{route('admin.setAdmin', compact('user'))}}">Attiva {{ $role }}</a>
                    @break
                    @case('revisore')
                    <a class="btn btn-info text-white revisorForm" href="{{route('admin.setRevisor', compact('user'))}}">Attiva {{ $role }}</a>
                    @break
                    @case('redattore')
                    <a class="btn btn-info text-white revisorForm" href="{{route('admin.setWriter', compact('user'))}}">Attiva {{ $role }}</a>
                    @break
                    @default
    
                    @endswitch
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

