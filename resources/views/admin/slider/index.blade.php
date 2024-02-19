@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('slider.create') }}" class="btn btn-success">Add New</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Slider
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Quote</th>
                                    <th> Image</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slider as $sli)
                                    <tr>
                                        <td>{{ $sli->id }}</td>
                                        <td> {{ $sli->quote }}</td>
                                        <td>
                                            <img src="{{ $sli->getFirstMediaUrl() }}" alt ='photo' width="200"
                                                height="250">
                                        </td>

                                        <td>
                                            <a href="{{ route('slider.edit', $sli->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('slider.destroy', $sli->id) }}" method="POST"
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
