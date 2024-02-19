@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Photograph
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('photograph.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('something')) is-invalid @endif"
                                    name="something" placeholder="Description">
                                @if ($errors->has('something'))
                                    <p class="text-danger">
                                        {{ $errors->first('something') }}
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
