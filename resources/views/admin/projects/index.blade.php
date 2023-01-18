@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            @foreach ($projects as $project)
            <div class="col-2 p-2 h-100">
                <div class="card h-100">
                    <img src="{{$project->cover_image}}" class="card-img-top" alt="{{$project->name}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$project->name}}</h5>
                      <p class="card-text">{{$project->client_name}}</p>
                      <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">Dettagli Progetto</a>
                    </div>
                  </div>
            </div>

            @endforeach
        </div>
    </div>
@endsection
