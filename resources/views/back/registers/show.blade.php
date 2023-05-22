@extends('layoutback')

@section('titulo', 'Crear registro')
@section('cuerpo')
    <main>
        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif
        <div class="card container">
            <div class="card-header d-flex flex-row">
                {{ $register->client->name }}
            </div>

            <div class="card-body d-flex flex-row justify-content-around text-center">

                <div class="d-flex flex-column">
                    <h5 class="card-title d-flex justify-content-center align-items-center">{{ $register->client->email }}
                    </h5>
                    <h6 class="card-title d-flex justify-content-center align-items-center">Modelo: {{ $register->model }}
                    </h6>
                    <h6 class="card-title d-flex justify-content-center align-items-center">Matrícula: {{ $register->plate }}
                    </h6>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center">
                    @php($total = 0)

                    @forelse($register->services as $service)
                        @php($total += $service->price)

                        <p class="card-text">{{ $service->title }} - {{ $service->price }} €</p>

                    @empty
                        <p>No hay servicios asociados...</p>
                    @endforelse
                </div>

                <div class="d-flex flex-column gap-1">
                    <form action="{{ route('registers.update', ['register' => $register]) }} " method="post" class="d-flex justify-content-end">
                        @csrf
                        @method('put')

                        <select class="btn btn-primary btn-sm" name="valueNewStatus" onchange="this.form.submit()">
                            @forelse($possibleStatusValues as $statusOption)
                                @if ($statusOption != $register->status)
                                    @if ($statusOption == 'Pendiente')
                                        <option class="bg-secondary">{{ $statusOption }}</option>
                                    @elseif ($statusOption == 'Recibido')
                                        <option class="bg-warning">{{ $statusOption }}</option>
                                    @elseif ($statusOption == 'En proceso')
                                        <option class="bg-warning">{{ $statusOption }}</option>
                                    @elseif ($statusOption == 'Terminado')
                                        <option class="bg-info">{{ $statusOption }}</option>
                                    @elseif ($statusOption == 'Pagado')
                                        <option class="bg-success">{{ $statusOption }}</option>
                                    @endif
                                @else
                                    @if ($register->status == 'Pendiente')
                                        <option selected class="bg-secondary">{{ $statusOption }}</option>
                                    @elseif ($register->status == 'Recibido')
                                        <option selected class="bg-secondary">{{ $statusOption }}</option>
                                    @elseif ($register->status == 'En proceso')
                                        <option selected class="bg-warning">{{ $statusOption }}</option>
                                    @elseif ($register->status == 'Terminado')
                                        <option selected class="bg-secondary">{{ $statusOption }}</option>
                                    @elseif ($register->status == 'Pagado')
                                        <option selected class="bg-success">{{ $statusOption }}</option>
                                    @endif
                                @endif

                            @empty
                            @endforelse
                        </select>
                    </form>
                    <a href="{{ route('generatePDF', ['register' => $register]) }}"
                        class="btn btn-primary d-flex justify-content-center align-items-center">IMPRIMIR FACTURA</a>

                    <button type="button" class="btn btn-danger " data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">
                        Eliminar registro
                        </button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar registro de {{$register->client->name}}</h5>
                                    <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">Quieres eliminar el registro seleccionado?</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('registers.destroy', ['register' => $register]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer text-muted mt-2 d-flex flex-row justify-content-center align-items-center gap-5">
                <span>Fecha de creación: {{ date('H:i:s d-m-Y', strtotime($register->entryDate)) }}</span>
                <span>Fecha de finalización: {{ date('H:i:s d-m-Y', strtotime($register->updated_at)) }}</span>
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
