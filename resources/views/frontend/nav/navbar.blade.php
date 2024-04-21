@include('frontend.nav.css')
@include('frontend.nav.script')

<nav class="navbar navbar-expand-lg navbar-dark cyan fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('images/logo.png') }}" alt="nav-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li
                    class="nav-item {{ request()->is('/fronindex') || request()->is('froindex') || request()->is('froindex/*') ? 'active' : '' }}">
                    <a class="nav-link " href="{{ route('froindex') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li
                    class="nav-item {{ request()->is('/froabout') || request()->is('froabout') || request()->is('froabout/*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('froabout') }}">About</a>
                </li>

                <li
                    class="nav-item {{ request()->is('/froblog') || request()->is('froblog') || request()->is('froblog/*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('froblog') }}">Read my blog </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
