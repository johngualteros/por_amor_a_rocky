@extends('layouts.base')
@section('content')
<main class="content-form">
    <h2 class="teal-text ">Formulario Registro Mi Vacuna</h2> 
    <form action="{{ route('vaccine.store') }}" method="POST" class="form" enctype="multipart/form-data"  >
            @csrf
            <label for="nombre">nombre: <span class="text-red">* <p>{{$errors->first('nombre') }}</p> </span></label>
            <input type="text" name="nombre">

            <div class="button">
                    <button type="submit" class="ov-btn-slide-right" onclick="alertapeludoform();">
                       Registrar Usuario
                    </button>
            
            </div>
        </form>
</main>
@endsection
