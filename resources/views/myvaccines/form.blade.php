@extends('layouts.base')
@section('content')
<main class="content-form">
    <h2 class="teal-text ">Formulario Registro Mi Vacuna</h2> 
    <form action="{{ route('myvaccine.store') }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            <label for="fecha">Fecha: <span class="text-red">* <p>{{$errors->first('fecha') }}</p> </span></label>
            <input type="date" name="fecha">

            <label for="pet">Peludo a Vacunar: <span class="text-red">* <p>{{$errors->first('pet') }}</p> </span></label>
            <select name="pet" id="pet">
                <option value="" >Seleccione el peludo</option>
                    @foreach($pets as $pet)
                    <option value=" {{ $pet->id }} ">
                        {{ $pet->nombrePeludo }}
                    </option>
                    @endforeach
                </select>

                <label for="vaccine">Vacuna inyectada: <span class="text-red">* <p>{{$errors->first('vaccine') }}</p> </span></label>
            <select name="vaccine" id="vaccine">
                <option value="" >Seleccione la vacuna</option>
                    @foreach($vacs as $vac)
                    <option value=" {{ $vac->id }} ">
                        {{ $vac->nombreVacuna }}
                    </option>
                    @endforeach
                </select>
        

            


            <div class="button">
                    <button type="submit" class="ov-btn-slide-right" onclick="alertapeludoform();">
                       Registrar Usuario
                    </button>
            
            </div>
        </form>
</main>
@endsection
