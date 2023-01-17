@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <div class="card">
                <div class="card-header">La tua area personale</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-4 p-4">
                                <img src="{{url('/img/Funny Bunny-7.png')}}" alt="">
                            </div>
                            <div class="col-8 p-4">

                                    <p><strong>Nome: </strong>{{ Auth::user()->name }}</p>
                                <p><strong>Email: </strong>{{ Auth::user()->email }}</p>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
