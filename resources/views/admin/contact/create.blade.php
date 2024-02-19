@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Contact
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email"
                                    class="form-control @if ($errors->has('email')) is-invalid @endif" name="email"
                                    placeholder="Email">
                                @if ($errors->has('email'))
                                    <p class="text-danger">
                                        {{ $errors->first('email') }}
                                    </p>
                                @endif
                                <label for="name">Number</label>
                                <input type="num"
                                    class="form-control @if ($errors->has('num')) is-invalid @endif" name="num"
                                    placeholder="Number">
                                @if ($errors->has('num'))
                                    <p class="text-danger">
                                        {{ $errors->first('num') }}
                                    </p>
                                @endif
                                <label for="name">Description</label>
                                <textarea id="introduce" class="form-control" name="introduce" @if ($errors->has('introduce')) is-invalid @endif
                                    name="introduce" placeholder="Description">
                                </textarea>
                                @if ($errors->has('introduce'))
                                    <p class="text-danger">
                                        {{ $errors->first('introduce') }}
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
