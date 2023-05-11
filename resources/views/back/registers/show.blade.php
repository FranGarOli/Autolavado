@extends('layoutback')

@section('titulo', 'Crear registro')
@section('cuerpo')
    <main>
        <h1>Registro: {{$register->id}}</h1><br>
        <form action="{{route('registers.update', ['register' => $register])}} " method="post">
            @csrf
            @method('put')

            <select class="btn btn-primary" name="valueNewStatus" onchange="this.form.submit()">
                @forelse($possibleStatusValues as $statusOption)

                    @if($statusOption != $register->status)
                        <option>{{$statusOption}}</option>
                    @else
                        <option selected>{{$statusOption}}</option>
                    @endif

                @empty
                @endforelse
            </select>
        </form>

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
