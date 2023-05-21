<footer class="footer">
  <div class="container">
      <div class="row">
          <div class="col-md-5">
              <h5><img class="customLogoFooter mb-1 mx-1" src="/media/occhio2.png" alt=""><spasn>OCCHIO DEL REPORTER</span> </h5>
              <div class="row">
                  <div class="col-6">
                        <p class="fs-5 mt-3">SEZIONI</p>
                      <ul class="list-unstyled">
                          <li><a class="nav-link"
                            href="{{ route('article.byCategory', ['category' => 'sport']) }}">Sport</a></li>
                          <li> <a class="nav-link"
                            href="{{ route('article.byCategory', ['category' => 'Politica']) }}">Politica</a></li>
                          <li><a class="nav-link"
                            href="{{ route('article.byCategory', ['category' => 'Tech']) }}">Tech</a></li>
                      </ul>
                  </div>
                  <div class="col-6">
                      <ul class="list-unstyled lastLinkFooter">
                        <li><a class="nav-link"
                            href="{{ route('article.byCategory', ['category' => 'Economia']) }}">Economia</a></li>
                          <li><a class="nav-link"
                            href="{{ route('article.byCategory', ['category' => 'Food&Drink']) }}">Food and drink</a></li>
                          <li><a class="nav-link" href="{{ route('article.index') }}">Tutti gli articoli</a></li>
                      </ul>
                  </div>
              </div>
              <p class="fs-5">FOLLOW US</p>
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
              <form class="my-4">
                <fieldset class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </fieldset>
                <fieldset class="form-group">
                    <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                </fieldset>
                <fieldset class="form-group text-xs-right">
                    <button type="button" class="btn btn-white-outline btn-lg text-white">Send</button>
                </fieldset>
            </form>
          </div>
      </div>
  </div>
</footer>