@extends('layouts.base')
@section('content')
<main class="content-form">
<table class="table table-hover table-bordered" id="datat">
<button><a href="{{route('pet.create')}}">Registrar Peludo</a></button>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Descripcion</th>
            <th>Raza</th>
            <th>Zona</th>
            <th>Estado</th>
            <th>Usuario</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{$pet->id}}</td>
            <td>{{$pet->nombrePeludo}}</td>
            <td>{{$pet->edad}}</td>
            <td>{{$pet->descripcionSalud}}</td>
            <td>{{$pet->raza}}</td>
            <td>{{$pet->zonaVivienda}}</td>
            <td>{{$pet->estadoPeludo}}</td>
            <td>{{$pet->user_id}}</td>
            <td><a href="{{route('pet.edit',$pet->id)}}">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>
@endsection
