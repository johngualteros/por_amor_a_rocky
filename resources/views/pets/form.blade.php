@extends('layouts.base')
@section('content')
<main class="content-form">
    <h2 class="teal-text ">Formulario Registro Peludo</h2> 
    <form action="{{ route('pet.store') }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre">

            <label for="edad">edad: <span class="text-red">*<p>{{$errors->first('edad') }}</p></span></label>
            <input type="number" name="edad">

            <label for="user">Usuario que Registra: <span class="text-red">* <p>{{$errors->first('user') }}</p> </span></label>
            <select name="user" id="user">
                <option value="" >Seleccione el usuario</option>
                    @foreach($users as $user)
                    <option value=" {{ $user->id }} ">
                        {{ $user->nombre }} {{ $user->apellido }}
                    </option>
                    @endforeach
                </select>




            <label for="desc">Descripcion Salud: <span class="text-red">*<p>{{$errors->first('desc') }}</p></span></label>
            <input type="longtext" name="desc">

            <label for="raza">raza: <span class="text-red">* <p>{{$errors->first('raza') }}</p> </span></label>
            <input type="text" name="raza">

            <label for="zona">zona: <span class="text-red">* <p>{{$errors->first('zona') }}</p> </span></label>
            <input type="text" name="zona">

            <label for="est">estadoPeludo: <span class="text-red">* <p>{{$errors->first('est') }}</p> </span></label>
            <input type="text" name="est">
            
            <label for="foto">Foto: <p>{{$errors->first('foto') }}</p></label>
            <input type="file" name="foto" id="" accept="image/png, .jpeg, .jpg">


            <div class="button">
                    <button type="submit" class="ov-btn-slide-right" onclick="alertapeludoform();">
                       Registrar Usuario
                    </button>
            
            </div>
        </form>
</main>
@endsection
