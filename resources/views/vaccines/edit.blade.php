@extends('layouts.base')
@section('content')
<main class="content-form">
    <h2 class="teal-text ">Formulario Actualizacion Peludo</h2> 
    <form action="{{ route('vaccine.update', $vacs->id) }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            @method('PUT')
            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre" value="{{$vacs->nombreVacuna}}">


            


            <div class="button">

                    <button type="submit" class="ov-btn-slide-right" >
                      Actualizar Vacuna
                    </button>
            
            </div>
        </form>
</main>
@endsection
