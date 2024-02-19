@extends('frontend.layout')
@section('frontend')
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <!--Slides-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            @foreach ($slider as $index => $sli)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{ $sli->getFirstMediaUrl() }}" alt="Slide {{ $index + 1 }}">
                    <div class="gradient"></div>
                    <div class="carousel-caption">
                        <h1>{{ $sli->quote }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
        <!--/.Slides-->
        <!--/.Controls-->


        <!--/.Slides-->
        <!--/.Controls-->
        <ol class="carousel-indicators">
            @foreach ($slider as $sli)
                <li data-target="#carousel-thumb" data-slide-to="{{ $loop->index }}"
                    class="{{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100 img-fluid" src="{{ $sli->getFirstMediaUrl() }}">
                </li>
            @endforeach
        </ol>

    </div>
    <!--/.Carousel Wrapper-->

    <!-- Page Content -->

    <section id="portfolio">
        <div class="container">
            <h2>Recently Added Photographs</h2>
            <div class="row justify-content-center">
                <div class="col-md-12 col-12">
                    <div class="row">
                        @foreach ($photograph as $pht)
                            <a href="{{ $pht->getFirstMediaUrl() }}" data-toggle="lightbox" data-gallery="example-gallery"
                                class="col-xl-6 col-md-4 box-1">
                                <img src="{{ $pht->getFirstMediaUrl() }}" class="img-fluid">
                                <div class="overlay">

                                    <div class="text">{{ $pht->something }}

                                    </div>

                                </div>
                            </a>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 left-side">
                    <h2>My Recent Blog Posts</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="figure">
                                <a href="single.html"><img src="images/banner-image-1.jpg" class="figure-img img-fluid"
                                        alt="A generic square placeholder image with rounded corners in a figure."></a>
                                <figcaption class="figure-caption"> <img src="images/comment.png"
                                        alt=""><span>45</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4><a href="single.html">Super and up for the comming model in shoot at newyork USA
                                    morning..</a></h4>
                            <div class="btn-group">
                                <a href="single.html" class="btn btn-danger">Ladakh, India</a>
                                <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> 345</button>
                            </div>
                            <p>Posted on : 23.05.2016</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="figure">
                                <a href="single.html"><img src="images/banner-image-2.jpg" class="figure-img img-fluid"
                                        alt="A generic square placeholder image with rounded corners in a figure."></a>
                                <figcaption class="figure-caption"> <img src="images/comment.png"
                                        alt=""><span>45</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4><a href="single.html">Super and up for the comming model in shoot at newyork USA
                                    morning..</a></h4>
                            <div class="btn-group">
                                <a href="single.html" class="btn btn-danger">Ladakh, India</a>
                                <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> 345</button>
                            </div>
                            <p>Posted on : 23.05.2016</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="figure">
                                <a href="single.html"><img src="images/banner-image-3.jpg" class="figure-img img-fluid"
                                        alt="A generic square placeholder image with rounded corners in a figure."></a>
                                <figcaption class="figure-caption"> <img src="images/comment.png"
                                        alt=""><span>45</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4><a href="single.html">Super and up for the comming model in shoot at newyork USA
                                    morning..</a></h4>
                            <div class="btn-group">
                                <a href="single.html" class="btn btn-danger">Ladakh, India</a>
                                <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> 345</button>
                            </div>
                            <p>Posted on : 23.05.2016</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="figure">
                                <a href="single.html"><img src="images/banner-image-4.jpg" class="figure-img img-fluid"
                                        alt="A generic square placeholder image with rounded corners in a figure."></a>
                                <figcaption class="figure-caption"><img src="images/comment.png"
                                        alt=""><span>45</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4><a href="single.html">Super and up for the comming model in shoot at newyork USA
                                    morning..</a></h4>
                            <div class="btn-group">
                                <a href="single.html" class="btn btn-danger">Ladakh, India</a>
                                <button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> 345</button>
                            </div>
                            <p>Posted on : 23.05.2016</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="right-side">
                                <h3>Whos Me ?</h3>
                                @foreach ($contact as $cnt)
                                    <figure>
                                        <img src="{{ $cnt->getFirstMediaUrl() }}" alt="">
                                    </figure>
                                    <h5>{{ $cnt->introduce }}</h5>
                                    <a href="https://www.facebook.com/za.son.100/"><i class="fa fa-facebook-square"
                                            aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/in/jason-k-c-2988b420b/"><i
                                            class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                    <a href="https://www.youtube.com/channel/UCwuvqS36JAhZRbAaW8VxixA"><i
                                            class="fa fa-youtube-square" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/mj.easion/"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>

                                    <address>
                                        <span>Phone: {{ $cnt->num }}</span>
                                        <span>Email : {{ $cnt->email }}</span>
                                    </address>
                                @endforeach
                                <h2>Quick Contact</h2>

                                <form id="contact" action="{{ route('response.store') }}" method="POST"
                                    enctype="multipart/form-data" class="form" role="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 form-group">
                                            <input type="text"
                                                class="form-control @if ($errors->has('name')) is-invalid @endif"
                                                name="name" id="name" placeholder="Name">
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-xs-6 col-md-6 form-group">
                                            <input class="form-control @if ($errors->has('email')) is-invalid @endif"
                                                id="email" name="email" placeholder="Email" type="email">
                                            @if ($errors->has('email'))
                                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <textarea class="form-control @if ($errors->has('message')) is-invalid @endif" id="message" name="message"
                                        placeholder="Message" rows="5"></textarea>
                                    @if ($errors->has('message'))
                                        <p class="text-danger">{{ $errors->first('message') }}</p>
                                    @endif
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 form-group">
                                            <button class="btn btn-primary" type="submit">Alright Submit it</button>
                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @extends('frontend.nav.script')
    <script>
        // JavaScript to handle form submission and display pop-up window
        $(document).ready(function() {
            $('#contact').submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                // Perform an AJAX post request to submit the form data
                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        // Handle success response
                        if (response.success) {
                            // Display the pop-up window
                            alert(response.message);
                            // Reload the page
                            window.location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@endsection
