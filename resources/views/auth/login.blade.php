@vite (['resources/css/app.css', 'resources/js/app.js'])

<x-navbar />
    <div class="container mt-5 mb-5 height">
        <div class="row">
            <div class="col-12 col-md-6   align-items-center ">
                <h1 class="h1-accedi">Accedi</h1>

                <p class="para-accedi">Bentornato! Siamo pronti a leggere cosa c'è di nuovo</p>



            </div>
            <div class="col-12 col-md-6">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control @error ('email') is invalid @enderror" name="email">
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

                    <button type="submit" class="btn btn-dark">Accedi</button>
                    <p class="small mt-2">Non sei registrato? <a href="{{ route('register')}}">Clicca qui</a></p>
                </form>

            </div>
        </div>
    </div>



