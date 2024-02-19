@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Slider
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Quote</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('quote')) is-invalid @endif" name="quote"
                                    placeholder="Quote">
                                @if ($errors->has('quote'))
                                    <p class="text-danger">
                                        {{ $errors->first('quote') }}
                                    </p>
                                @endif
                                <label for="img">Img</label>
                                <input type="file" name="photo[]" class="form-control" multiple>
                                @if ($errors->has('photo'))
                                    <p class="text-danger">
                                        {{ $errors->first('photo') }}
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
