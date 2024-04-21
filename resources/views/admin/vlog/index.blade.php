@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('vlog.create') }}" class="btn btn-success">Add New</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            location
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Location</th>
                                    <th>Title</th>
                                    <th>Date</th>

                                    <th> Image </th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vlog as $vlo)
                                    <tr>
                                        <td>{{ $vlo->id }}</td>
                                        <td> {{ $vlo->location->location }}</td>
                                        <td>{{ $vlo->title }}</td>
                                        <td>{{ $vlo->date }}</td>

                                        <td>
                                            <img src="{{ $vlo->getFirstMediaUrl() }}" alt ='photo' width="200"
                                                height="250">
                                        </td>


                                        <td>
                                            <a href="{{ route('vlog.edit', $vlo->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('vlog.destroy', $vlo->id) }}" method="POST"
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
