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
            <div class="container-requests-adoption">
                @foreach ($adoptions as $adoption )
                
                    <div class="container-adoption">
                        <section class="container-section-adoption">
                            <h1>Nombre perro</h1>
                            <h3>{{$adoption->nombre}}</h3>
                            <p>{{$adoption->celular}}</p>
                        </section>
                        <section>
                            <a onclick="aprobeAlert()"><button class="approve-button">Aprobar</button></a>
                            <a onclick="declineAlert()"><button class="decline-button">Rechazar</button></a>
                            <a href="{{route('solicitarAdopcion.show',  $adoption->id)}}"><button class="view-button">Ver</button></a>
                        </section>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
