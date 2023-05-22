<footer class="footer">
  <div class="container">
      <div class="row">
          <div class="col-md-5">
              <h5><img class="customLogoFooter mb-1 mx-1" src="/media/occhio2.png" alt=""><spasn>OCCHIO DEL REPORTER</span> </h5>
              <div class="row">
                  <div class="col-6">
                        <p class="fs-5 mt-3">SEZIONI</p>
                      <ul class="list-unstyled">
                          <li><a class="nav-link-footer"
                            href="{{ route('article.byCategory', ['category' => 'sport']) }}">Sport</a></li>
                          <li> <a class="nav-link-footer"
                            href="{{ route('article.byCategory', ['category' => 'Politica']) }}">Politica</a></li>
                          <li><a class="nav-link-footer"
                            href="{{ route('article.byCategory', ['category' => 'Tech']) }}">Tech</a></li>
                      </ul>
                  </div>
                  <div class="col-6">
                      <ul class="list-unstyled lastLinkFooter">
                        <li><a class="nav-link-footer"
                            href="{{ route('article.byCategory', ['category' => 'Economia']) }}">Economia</a></li>
                          <li><a class="nav-link-footer"
                            href="{{ route('article.byCategory', ['category' => 'Food&Drink']) }}">Food and drink</a></li>
                          <li><a class="nav-link" href="{{ route('article.index') }}">Tutti gli articoli</a></li>
                      </ul>
                  </div>
              </div>
              <p class="fs-5 mt-2">FOLLOW US</p>
              <ul class="nav">
                  <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                  <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                  <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                  <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
              </ul>
              <br>
          </div>
          <div class="col-md-6">
              <h5 class="fs-5">CONTACT US</h5>
              <form class="p-5" action="{{route('careers.submit')}}" method="POST">
                @csrf
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
                    <button class="btn btn-white text-white">Invia la tua candidatura</button>
                </div>
              </form>
          </div>
      </div>
  </div>
</footer>