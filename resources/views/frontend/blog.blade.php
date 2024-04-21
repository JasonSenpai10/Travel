@extends('frontend.layout')

@section('frontend')
    <section class="blog" style="margin-top: 50px;">
        <div class="container">
            <h2>My Recent Blog Posts</h2>
            <div class="row">
                @foreach ($vlog as $vlo)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <figure class="figure">
                                <a href="{{ route('content', $vlo->id) }}"><img src="{{ $vlo->getFirstMediaUrl() }}"
                                        class="figure-img img-fluid" alt="Blog Image" style="width: 100%; height: auto;"></a>
                            </figure>
                            <div class="card-body">
                                <h4><a href="{{ route('content', $vlo->id) }}">{{ $vlo->title }}</a></h4>
                                <div class="btn-group">
                                    <a href="{{ url('post', $vlo->id) }}"
                                        class="btn btn-danger">{{ $vlo->location->location ?? 'No Location' }}</a>
                                </div>
                                <p>Posted on: {{ $vlo->date }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @extends('frontend.nav.script')
@endsection
