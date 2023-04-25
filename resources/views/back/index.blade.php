@extends('layoutback')

@section('titulo', 'Autolavado García')
@section('cuerpo')
<main>
    <div class="registros">
        @forelse ($registers as $registro)
            <div class="register-card">
                    <h5 class="card-title">{{$registro->client->name}}</h5>

                    <p>Total: {{$registro->total}}€</p>
                    <select class="btn btn-primary">
                        <option selected>{{$registro->status}}</option>
                        <option>En progreso</option>
                        <option>Pagado</option>
                    </select>
            </div>
        @empty
            <p>No existen registros...</p>
        @endforelse
    </div>
</main>
@endsection
