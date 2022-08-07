@extends('layouts.base')
@section('content')
    {{-- Contenedor padre de la interfaz de lista de adopciones --}}
    <div class="container-pattern-list-adoptions">
        <div class="menu-list-adoptions">a</div>
        <div class="header-list-adoptions">
            <div>
                <h3>John Gualteros</h3>
                <p>Director</p>
            </div>
            <div>
                <img src="https://www.fundacion-affinity.org/sites/default/files/los-10-sonidos-principales-del-perro.jpg"
                    alt="Imagen Usuario" class="user-photo">
            </div>
        </div>
        {{-- Contenedor Contenido --}}
        <div class="content-list-adoptions">
            <table class="container-requests-adoption" id="datat">
                <thead class="header-table-list-adoptions">
                    <tr>
                        <th>Nombre Peludito</th>
                        <th>Nombre</th>
                        <th>Celular</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="container-adoption">
                    @foreach ($adoptions as $adoption)
                        <tr class="container-section-adoption">
                            <td>Nombre perro</td>
                            <td>{{ $adoption->nombre }}</td>
                            <td>{{ $adoption->celular }}</td>
                            <td>
                                @if ($adoption->estado == 'pendiente')
                                        <a onclick="aprobeAlert(`{{$adoption->id}}`)" role="button"><button class="approve-button">Aprobar</button></a>
                                        <a onclick="declineAlert()" href="{{ route('solicitarAdopcion.edit',['rechazar',$adoption->id])}}" role="button"><button class="decline-button">Rechazar</button></a>
                                    @elseif ($adoption->estado == 'aprobado')
                                        <button class="approve-button">Aprobado</button>
                                    @elseif ($adoption->estado == 'rechazado')
                                        <button class="decline-button">Rechazado</button>
                                @endif
                                <a href="{{ route('solicitarAdopcion.show', $adoption->id) }}"><button
                                        class="view-button">Ver</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    6
@endsection
