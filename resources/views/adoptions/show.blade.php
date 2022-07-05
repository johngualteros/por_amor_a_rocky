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
        <div class="content-list-adoption">
                <div class="container-requests-adoption">
                <section class="close-button-view-adoption">
                    <a href="{{route('solicitarAdopcion.index')}}"><i class="bi bi-x-square-fill"></i></a>
                </section>
                <h1>Datos de la adopcion Numero {{$adoption->id}}</h1>
                <p><span class="text-bold">Documento:</span> {{$adoption->documento}}</p>
                <p><span class="text-bold">Número Documento:</span> {{$adoption->numeroDocumento}}</p>
                <p><span class="text-bold">Nombre:</span> {{$adoption->nombre}}</p>
                <p><span class="text-bold">Apellidos:</span> {{$adoption->apellidos}}</p>
                <p><span class="text-bold">Celular:</span> {{$adoption->celular}}</p>
                <p><span class="text-bold">Email:</span> {{$adoption->correo}}</p>
                <p><span class="text-bold">Direccion:</span> {{$adoption->direccion}}</p>
                <p><span class="text-bold">FechaNacimiento:</span> {{$adoption->fechaNacimiento}}</p>
                <p><span class="text-bold">Numero de personas con las que reside:</span> {{$adoption->numeroPersonasReside}}</p>
                <p><span class="text-bold">Contacto Empresa:</span> {{$adoption->contactoEmpresa}}</p>
                <p><span class="text-bold">Empresa:</span> {{$adoption->empresaTrabaja}}</p>
                <p><span class="text-bold">Sueldo:</span> {{$adoption->sueldo}}</p>
                <p><span class="text-bold">Zona de Vivienda:</span> {{$adoption->zonaVivienda}}</p>
            </div>
        </div>
    </div>

@endsection
