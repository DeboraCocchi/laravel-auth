@extends('layouts.app')

@section('content')
    <div class="container w-50 m-auto text-center mt-5">
        <img src="{{$project->cover_image}}" alt="{{$project->name}}">
        <h2 class="mb-2 mt-4"><strong>Nome Progetto: </strong>{{$project->name}}</h2>
        <h4  class="my-2"><strong>Cliente: </strong>{{$project->client_name}}</h4>
        <p  class="my-2"><strong>Descrizione: </strong>{{$project->summary}}</p>
        <a href="{{route('admin.projects.index')}}" class="btn btn-dark">Torna all'elenco progetti</a>
    </div>
@endsection
