@extends('frontend.layout')
@section('frontend')
    <section class="blog">


        
    
        <!-- Check if the vlog has media before trying to get the URL -->
        @if ($vlog->hasMedia())
            <img src="{{ $vlog->getFirstMediaUrl() }}" alt="Vlog Image" style="width: 100%; height: 800px;">
        @endif
        <div class="container">

            <div class="row">
                <div class="col-md-8 offset-md-2"> <!-- Centering the title in an 8-column grid with a 2-column offset -->
                    <h1>{{ $vlog->title }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2"> <!-- Centering the title in an 8-column grid with a 2-column offset -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group float-md-right">
                                <h4> {{ $vlog->location->location ?? 'No Location' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>
                                <p class="float-md-right">Posted on: {{ $vlog->date }}</p>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <p> {{ $vlog->blog }}</p>
        </div>




    </section>
    @extends('frontend.nav.script')
@endsection
