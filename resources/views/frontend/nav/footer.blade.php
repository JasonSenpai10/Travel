  <footer>
      <section class="footer-top">
          <!--Container-->
          <div class="container">
              <h2>My Flickr Feed</h2>
              <div class="row text-center text-lg-left">
                  @foreach ($photograph as $pht)
                      <div class="col-lg-2 col-md-4 col-xs-6">
                          <a href="#" class="d-block h-100">
                              <img class="img-fluid img-thumbnail" src="{{ $pht->getFirstMediaUrl() }}" alt="">
                          </a>
                      </div>
                  @endforeach
              </div>
          </div>

          <!-- /.container -->
      </section>
      <section class="footer-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <ul>
                          <li><a href="index.html">Home</a></li>
                          <li class="hidden">/</li>
                          <li><a href="about.html">About-us</a></li>
                          <li class="hidden">/</li>
                          <li><a href="mystories.html">My stories</a></li>
                          <li class="hidden">/</li>
                          <li><a href="destinations.html">Destinations</a></li>
                          <li class="hidden">/</li>
                          <li><a href="gallery.html">Gallery</a></li>
                          <li class="hidden">/</li>
                          <li><a href="contact.html">Contact</a></li>
                      </ul>
                  </div>
                  <div class="col-md-12">
                      <p>(C) All Rights Reserved <a href="{{ route('froindex') }}" target="_blank">THE TRAVELLER</a>
                          <span>/</span> Designed and Developed by <a
                              href="https://www.linkedin.com/in/jason-k-c-2988b420b/" target="_blank">Jason K C</a>
                      </p>
                  </div>
              </div>
          </div>
          <!-- /.container -->
      </section>
  </footer>
