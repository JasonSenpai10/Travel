@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Edit About
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('about')) is-invalid @endif" name="about"
                                    placeholder="Description" value="{{ $about->about }}">
                                @if ($errors->has('about'))
                                    <p class="text-danger">
                                        {{ $errors->first('about') }}
                                    </p>
                                @endif
                                <label for="img">Img</label>
                                <input type="file" name="photo" class="form-control">
                                <img src="{{ $about->getFirstMediaUrl() }}" alt="photo" width="200">
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
