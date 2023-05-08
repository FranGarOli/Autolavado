@extends('layoutback')

@section('titulo', 'Crear registro')
@section('cuerpo')
    <main>
        <h1>Registro: {{$register->id}}</h1><br>
        <select>
                <option selected>{{$register->status}}</option>
                @if($register->status != 'Recibido')

                    <option>Recibido</option>

                @endif
                <option>En proceso</option>
                <option>Terminado</option>
                <option>Pagado</option>

        </select>

        <div>
            <h2>Información del cliente</h2>
            <p>{{$register->client->name}}</p>
            <p>{{$register->client->dni}}</p>
            <p>{{$register->client->email}}</p>
            <p>{{$register->client->phone}}</p>

            <h2>Información sobre los servicios</h2>
            @php($total = 0)

            @forelse($register->services as $service)

                @php($total += $service->price)

                <div>
                    <p>{{$service->description}} - {{$service->price}} €</p>
                </div>

            @empty
                <p>No hay servicios asociados...</p>
            @endforelse
        </div>
        <h3>Total: {{$total}} €</h3>
    </main>
@endsection
