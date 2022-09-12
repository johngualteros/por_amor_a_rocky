@extends('layouts.base')
@section('content')
    <h2 class="teal-text ">Formulario Registro Mi Vacuna</h2> 
    <form action="{{ route('myvaccine.store') }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            <label for="fecha">Fecha: <span class="text-red">* <p>{{$errors->first('fecha') }}</p> </span></label>
            <input type="date" name="fecha">

            <label for="pet">Id Peludo: <span class="text-red">*<p>{{$errors->first('pet') }}</p></span></label>
            <input type="number" name="pet">

            <label for="vaccine">Id Vacuna: <span class="text-red">*<p>{{$errors->first('vaccine') }}</p></span></label>
            <input type="number" name="vaccine">

            


            <div class="button">
                    <button type="submit" class="ov-btn-slide-right" onclick="alertapeludoform();">
                       Registrar Usuario
                    </button>
            
            </div>
        </form>
@endsection
