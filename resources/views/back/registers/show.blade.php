@extends('layoutback')

@section('titulo', 'Crear registro')
@section('cuerpo')
    <main>
        <div class="card container">
            <div class="card-header">{{ $register->client->name }}</div>
            <div class="card-body d-flex flex-row justify-content-around text-center">

                <h5 class="card-title d-flex justify-content-center align-items-center">{{ $register->client->email }}</h5>

                <div class="d-flex flex-column justify-content-center align-items-center">
                    @php($total = 0)

                    @forelse($register->services as $service)
                        @php($total += $service->price)

                        <p class="card-text">{{ $service->title }} - {{ $service->price }} €</p>

                    @empty
                        <p>No hay servicios asociados...</p>
                    @endforelse
                </div>

                <a href="#" class="btn btn-primary d-flex justify-content-center align-items-center">IMPRIMIR FACTURA</a>
            </div>
            <div class="card-footer text-muted mt-2 d-flex flex-row justify-content-center align-items-center gap-5">
                <span>Fecha de creación:  {{ $service->created_at }}</span>
                <span>Fecha de finalización:  {{ $service->updated_at }}</span>
            </div>
        </div>
        {{-- <h1>Registro: {{$register->id}}</h1><br>
        <form action="{{route('registers.update', ['register' => $register])}} " method="post">
            @csrf
            @method('put')

            <select class="btn btn-primary" name="valueNewStatus" onchange="this.form.submit()">
                @forelse($possibleStatusValues as $statusOption)

                    @if ($statusOption != $register->status)
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
        <h3>Total: {{$total}} €</h3> --}}
    </main>
@endsection
