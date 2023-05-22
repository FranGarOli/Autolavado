@extends('layoutback')

@section('titulo', 'Autolavado García')
@section('cuerpo')

    <main class="container d-flex flex-column mt-5">

        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <div class="card d-flex justify-content-center text-center">
            <h5 class="card-header">{{ $client->name }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ $client->email }}</h5>
                <p class="card-text">DNI : {{ $client->dni }}</p>
                <p class="card-text">Teléfono : {{ $client->phone }}</p>
                <p class="card-text">Desde :  {{ date('H:i:s d-m-Y', strtotime($client->created_at)) }}</p>
                <a href="{{ route('clients.edit', ['client' => $client]) }}" class="btn btn-primary">Editar</a>
            </div>
        </div>

    </main>
@endsection
