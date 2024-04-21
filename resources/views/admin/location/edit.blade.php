@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Edit Location
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('location.update', $location->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Location</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('location')) is-invalid @endif" name="location"
                                    placeholder="location" value="{{ $location->location }}">
                                @if ($errors->has('location'))
                                    <p class="text-danger">
                                        {{ $errors->first('location') }}
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
