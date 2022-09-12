@extends('layouts.base')
@section('content')

<table class="table table-hover table-bordered" id="datat">
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
@endsection
