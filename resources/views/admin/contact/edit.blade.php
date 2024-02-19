@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Edit Contact
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contact.update', $contact->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email"
                                    class="form-control @if ($errors->has('email')) is-invalid @endif" name="email"
                                    placeholder="Email" value="{{ $contact->email }}">
                                @if ($errors->has('email'))
                                    <p class="text-danger">
                                        {{ $errors->first('email') }}
                                    </p>
                                @endif
                                <label for="name">Number</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('num')) is-invalid @endif" name="num"
                                    placeholder="Number" value="{{ $contact->num }}">
                                @if ($errors->has('num'))
                                    <p class="text-danger">
                                        {{ $errors->first('num') }}
                                    </p>
                                @endif
                                <label for="name">Description</label>
                                <textarea id="introduce" class="form-control" name="introduce" @if ($errors->has('introduce')) is-invalid @endif
                                    name="introduce" placeholder="{{ $contact->introduce }}">
                                   
                                    {{ $contact->introduce }}
                                        
                                    </textarea>
                                @if ($errors->has('introduce'))
                                    <p class="text-danger">
                                        {{ $errors->first('introduce') }}
                                    </p>
                                @endif
                                <label for="img">Img</label>
                                <input type="file" name="photo" class="form-control">
                                <img src="{{ $contact->getFirstMediaUrl() }}" alt="photo" width="200">
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
