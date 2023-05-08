@extends('layoutback')

@section('titulo', 'Autolavado García')
@section('cuerpo')
<main>
    <div class="registros">
        <br>

        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        @forelse ($registers as $registro)
            <div class="register-card">

                <a href="{{route('registers.show', ['register' => $registro])}}">
                    <h5 class="card-title">{{$registro->client->name}}</h5>
                    @php($total = 0)



                    @forelse($registro->services as $service)

                        @php($total += $service->price)

                        <div>
                            <p>{{$service->description}} - {{$service->price}} €</p>
                        </div>

                    @empty
                        <p>No hay servicios asociados...</p>
                        @endforelse
                </a>

                <p>{{$total}} €</p>

                <form action="{{route('registers.update', ['register' => $registro])}} " method="post">
                    @csrf
                    @method('put')

                    <select class="btn btn-primary" name="valueNewStatus">
                        @forelse($possibleStatusValues as $statusOption)

                            @if($statusOption != $registro->status)
                                <option>{{$statusOption}}</option>
                            @else
                                <option selected>{{$statusOption}}</option>
                            @endif

                        @empty
                        @endforelse
                    </select>
                    <input type="submit" value="Cambiar estado">
                </form>

            </div><br>
        @empty
            <p>No existen registros...</p>
        @endforelse
    </div>
    {{ $registers->links()}}
    <br>
</main>
@endsection
