@extends('frontend.layout')
@section('frontend')
    <!-- Blog-Section -->
    <div class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>About Us</h3>
                    <figure class="figure">
                        <img src="images/banner-image-1.jpg" alt="about">
                    </figure>
                </div>
                <div class="col-sm-12">
                    <p>Welcome to my <a href="single.html">personal travel</a> blog, i love to travel the globe, i have been
                        to so many beautiful places and met interesting people the world, this website is my mirror of life.
                        <br> Welcome to my personal travel blog, i love to travel the globe, i have been to so many
                        beautiful Welcome to my personal travel blog, i love to travel the globe, i have been to so many
                        beautiful places and met interes Welcome to my personal travel blog, i love to travel the globe, i
                        have been to so many beautiful places and met interesting people around the world, this website is
                        my mirror of life.
                    </p>

                    <p>Welcome to my personal travel blog, i love to travel the globe, i have been to so many beautiful...e
                        world, this website is my mirror of life. <br> Welcome to my personal travel blog, i love to travel
                        the globe, i have been to so many beautiful...</p>
                    <p> Welcome to my personal travel blog, i love to travel the globe, i have been to so many beautiful
                        places and met interesting people the world, this website is my mirror of life. <br> Welcome to my
                        personal travel blog, i love to travel the globe, i have been to so many travel the globe, i have
                        been to so many beautiful places and met interesting people around the world, this website is my
                        mirror of life.
                    </p>
                    <p>Welcome to my <a href="single.html">personal travel</a> blog, i love to travel the globe, i have been
                        to so many beautiful...e world, this website is my mirror of life. <br> Welcome to my personal
                        travel blog, i love to travel the globe, i have been to so many beautiful...</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Return to Top -->
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
    @extends('frontend.nav.script')
@endsection
