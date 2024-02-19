@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Edit Photograph
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('photograph.update', $photograph->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('something')) is-invalid @endif"
                                    name="something" placeholder="Description" value="{{ $photograph->something }}">
                                @if ($errors->has('something'))
                                    <p class="text-danger">
                                        {{ $errors->first('something') }}
                                    </p>
                                @endif
                                <label for="img">Img</label>
                                <input type="file" name="photo" class="form-control">
                                <img src="{{ $photograph->getFirstMediaUrl() }}" alt="photo" width="200">
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
