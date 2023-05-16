<x-layout>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-6 px-5">
                <h1>Registrati</h1>

                <p>Entra a far parte della testata! Inserisci il tuo articolo e raccontaci quello che accade intorno a te!</p>

                <img class="img-fluid" src="/media/form3.jpg" alt="">



            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center boxForm">
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-custom form-control @error ('name') is invalid @enderror" name="name" value="{{ old('name')}}">
                        @error('name')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control @error ('email') is invalid @enderror" name="email" value="{{ old('email')}}">
                        @error('email')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control @error ('password') is invalid @enderror" name="password">
                        @error('password')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password:</label>
                        <input type="password" class="form-control @error ('password_confirmation') is invalid @enderror" name="password_confirmation">
                        @error('password_confirmation')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-dark">Registrati</button>
                    <p class="small mt-2">Già registrato <a href="{{ route('login') }}">Clicca qui</a></p>
                </form>

            </div>
        </div>
    </div>




</x-layout>
