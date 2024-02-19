@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Edit Slider
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Quote</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('quote')) is-invalid @endif" name="quote"
                                    placeholder="Quote" value="{{ $slider->quote }}">
                                @if ($errors->has('quote'))
                                    <p class="text-danger">
                                        {{ $errors->first('quote') }}
                                    </p>
                                @endif
                                <label for="img">Img</label>
                                <input type="file" name="photo" class="form-control">
                                <img src="{{ $slider->getFirstMediaUrl() }}" alt="photo" width="200">
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
