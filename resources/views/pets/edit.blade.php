@extends('layouts.base')
@section('content')
<main class="content-form">
    <h2 class="teal-text ">Formulario Actualizacion Peludo</h2> 
    <form action="{{ route('pet.update', $pets->id) }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')
            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre" value="{{$pets->nombrePeludo}}">

            <label for="edad">edad: <span class="text-red">*<p>{{$errors->first('edad') }}</p></span></label>
            <input type="number" name="edad" value="{{$pets->edad}}">

            <label for="user">user id: <span class="text-red">*<p>{{$errors->first('user') }}</p></span></label>
            <input type="number" name="user"value="{{$pets->user_id}}">

            <label for="desc">Descripcion Salud: <span class="text-red">*<p>{{$errors->first('desc') }}</p></span></label>
            <input type="longtext" name="desc" value="{{$pets->descripcionSalud}}">

            <label for="raza">raza: <span class="text-red">* <p>{{$errors->first('raza') }}</p> </span></label>
            <input type="text" name="raza"value="{{$pets->raza}}">

            <label for="zona">zona: <span class="text-red">* <p>{{$errors->first('zona') }}</p> </span></label>
            <input type="text" name="zona" value="{{$pets->zonaVivienda}}">

            <label for="est">estadoPeludo: <span class="text-red">* <p>{{$errors->first('est') }}</p> </span></label>
            <input type="text" name="est" value="{{$pets->estadoPeludo}}">
            


            <div class="button">

                    <button type="submit" class="ov-btn-slide-right" onclick="alertapeludoform();">
                      Actualizar Peludo
                    </button>
            
            </div>
        </form>
</main>
@endsection
