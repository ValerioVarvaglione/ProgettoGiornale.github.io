<x-layout>

    <div class="container-fluid p-5 text-center text-black">
        <div class="row justify-content-center">
            <h1>
                Lavora insieme a noi!
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p class="fs-5">Ecco cosa farai: 
                    Il direttore responsabile è il giornalista (professionista o pubblicista) che in Italia guida un giornale e risponde di fronte alla legge di tutto ciò che vi viene pubblicato. Il direttore rappresenta e impersonifica il giornale.</p>
                <h2>Lavora come revisore</h2>
                <p class="fs-5">Ecco cosa farai: Verifica la correttezza dell'articolo e che le notizie non siano false.</p>
                <h2>Lavora come redattore</h2>
                <p class="fs-5">Ecco cosa farai: Ha la responsabilità di organizzare la struttura dei contenuti, proporre revisioni redazionali e suggerire l'impostazione grafica nell'ottica di realizzare il progetto editoriale così come concordato con l'editore.</p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="p-5" action="{{route('careers.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui:</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email"
                            value="{{ old('email') ?? Auth::user()->email }}">
                    </div>
                    <div>
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message') }}</textarea>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-success text-white">Invia la tua candidatura</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-layout>