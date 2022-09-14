@extends('layouts.base')
@section('content')
<main class="content-form">
<table class="table table-hover table-bordered" id="datat">
<button><a href="{{route('vaccine.create')}}">Registrar Vacuna</a></button>
    <thead>
        <tr>
            <th>Id Vacuna</th>
            <th>Nombre Vacuna</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vacs as $vac)
        <tr>
            <td>{{$vac->id}}</td>
            <td>{{$vac->nombreVacuna}}</td>
            <td><a href="{{route('vaccine.edit',$vac->id)}}">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>
@endsection
