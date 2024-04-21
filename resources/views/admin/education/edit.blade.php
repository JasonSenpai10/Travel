@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Edit Education
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('education.update', $education->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('desc')) is-invalid @endif" name="desc"
                                    placeholder="Description" value="{{ $education->desc }}">
                                @if ($errors->has('desc'))
                                    <p class="text-danger">
                                        {{ $errors->first('desc') }}
                                    </p>
                                @endif
                                <label for="name">Institute</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('school')) is-invalid @endif" name="school"
                                    placeholder="Institute" value="{{ $education->school }}">
                                @if ($errors->has('school'))
                                    <p class="text-danger">
                                        {{ $errors->first('school') }}
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
