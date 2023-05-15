@extends('layoutback')

@section('titulo', 'Autolavado García')
@section('cuerpo')

    <main class="container d-flex flex-column gap-5 mt-5">

        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <table class="table align-middle mt-5 bg-white ">
            <thead class="bg-light">
                <tr>
                    <th>Cliente</th>
                    <th>Servicios</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @forelse ($registers as $registro)

                    <!--COLUMNA INFO CLIENTE (muestra foto, nombre y email)-->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                    style="width: 45px; height: 45px" class="rounded-circle" />

                                <div class="ms-3">
                                    <a href="{{ route('clients.show', ['client' => $registro->client]) }}"
                                        class="fw-bold mb-1">{{ $registro->client->name }}</a>
                                    <p class="text-muted mb-0">{{ $registro->client->email }}</p>
                                </div>
                            </div>

                        </td>

                        <!--COLUMNA SERVICIOS ASOCIADOS (SACA UN <P></P> POR SERVICIO) -->
                        <td>
                            @php($total = 0)

                            @forelse($registro->services as $service)
                                @php($total += $service->price)

                                <p class="fw-normal mb-1">{{ $service->description }} - {{ $service->price }} €</p>

                            @empty
                                <p>No hay servicios asociados...</p>
                            @endforelse

                        </td>

                        <!--COLUMNA TOTAL DEL REGISTRO (SUMA DE SERVICIOS ASOCIADOS)-->
                        <td>
                            <p class="fw-normal mb-1">{{ $total }} €</p>
                        </td>

                        <td>
                            <form action="{{ route('registers.update', ['register' => $registro]) }} " method="post">
                                @csrf
                                @method('put')

                                <select class="btn btn-primary" name="valueNewStatus" onchange="this.form.submit()">
                                    @forelse($possibleStatusValues as $statusOption)
                                        @if ($statusOption != $registro->status)
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
                                            @if ($registro->status == 'Pendiente')
                                                <option selected class="bg-secondary">{{ $statusOption }}</option>
                                            @elseif ($registro->status == 'Recibido')
                                                <option selected class="bg-secondary">{{ $statusOption }}</option>
                                            @elseif ($registro->status == 'En proceso')
                                                <option selected class="bg-warning">{{ $statusOption }}</option>
                                            @elseif ($registro->status == 'Terminado')
                                                <option selected class="bg-secondary">{{ $statusOption }}</option>
                                            @elseif ($registro->status == 'Pagado')
                                                <option selected class="bg-success">{{ $statusOption }}</option>
                                            @endif
                                        @endif

                                    @empty
                                    @endforelse
                                </select>
                            </form>
                        </td>

                        <td>{{ $registro->client->phone }}</td>

                        <!--COLUMNA VER UN REGISTRO-->
                        <td>
                            <p class="fw-normal mb-1">{{ $service->created_at }}</p>
                        </td>

                        <!--COLUMNA VER UN REGISTRO-->
                        <td>
                            <a href="{{ route('registers.show', ['register' => $registro]) }}">VER</a>
                        </td>
                    </tr>
                @empty
                    <p>No existen registros...</p>
                @endforelse

            </tbody>
        </table>

        <ul class="pagination d-flex gap-2">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="">Next</a>
            </li>
        </ul>


        <div>
            {{ $registers->links() }}
        </div>

    </main>
@endsection
