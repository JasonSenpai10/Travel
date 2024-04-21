@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Blog
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vlog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="location_id">Location</label>
                                <select name="location_id" class="form-control">
                                    @foreach ($location as $loc)
                                        <option value="{{ $loc->id }}">{{ $loc->location }}</option>
                                    @endforeach
                                </select>
                                <label for="name">Title</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('title')) is-invalid @endif" name="title"
                                    placeholder="Title">
                                @if ($errors->has('title'))
                                    <p class="text-danger">
                                        {{ $errors->first('title') }}
                                    </p>
                                @endif
                                <label for="name">Date</label>
                                <input type="date"
                                    class="form-control @if ($errors->has('date')) is-invalid @endif" name="date"
                                    placeholder="Date">
                                @if ($errors->has('date'))
                                    <p class="text-danger">
                                        {{ $errors->first('date') }}
                                    </p>
                                @endif
                                <label for="img">Img</label>
                                <input type="file" name="photo[]" class="form-control" multiple>
                                @if ($errors->has('photo'))
                                    <p class="text-danger">
                                        {{ $errors->first('photo') }}
                                    </p>
                                @endif
                                <label for="name">Blog</label>
                                <textarea id="blog" class="form-control" style="height: 500px;" name="blog"
                                    @if ($errors->has('blog')) is-invalid @endif name="blog" placeholder="Blog">
                        </textarea>
                                @if ($errors->has('blog'))
                                    <p class="text-danger">
                                        {{ $errors->first('blog') }}
                                    </p>
                                @endif


                            </div>



                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
