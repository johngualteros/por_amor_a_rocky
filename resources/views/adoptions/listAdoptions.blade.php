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
                        <section>
                            <h1>Nombre perro</h1>
                            <h3>{{$adoption->nombre}}</h3>
                            <p>{{$adoption->celular}}</p>
                        </section>
                        <section>
                            <button class="approve-button">Aprobar</button>
                            <button class="decline-button">Rechazar</button>
                        </section>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
