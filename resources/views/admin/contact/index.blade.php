@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('contact.create') }}" class="btn btn-success">Add New</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Contact
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th> Number </th>
                                    <th> Description</th>
                                    <th> Image</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $cnt)
                                    <tr>
                                        <td>{{ $cnt->id }}</td>
                                        <td> {{ $cnt->email }}</td>
                                        <td> {{ $cnt->num }}</td>
                                        <td> {{ $cnt->introduce }}</td>
                                        <td>
                                            <img src="{{ $cnt->getFirstMediaUrl() }}" alt ='photo' width="200"
                                                height="250">
                                        </td>

                                        <td>
                                            <a href="{{ route('contact.edit', $cnt->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('contact.destroy', $cnt->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
