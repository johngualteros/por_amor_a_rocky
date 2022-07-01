@extends('layouts.base')
@section('content')
  <form
    method="post"
    action="{{ route('citas.store') }}"
    class="form"
    enctype="multipart/form-data"
  >
    <h2 class="form__title">Cita</h2>

    <div class="container">
      <div class="group">
        <label for="enlace" class="label">Enlace</label>
        <input
          type="text"
          id="enlace"
          class="input"
          placeholder="Ingrese el enlace"
          name="enlace"
        />
        <strong class="purple-text darken-2">
          {{ $errors->first('enlace') }}
        </strong>
      </div>

      <div class="group">
        <label for="fecha" class="label">Fecha</label>
        <input
          type="date"
          id="fecha"
          class="input"
          name="fecha"
        />
        <strong class="purple-text darken-2">
            {{ $errors->first('fecha') }}
        </strong>
      </div>

      <div class="group">
        <label for="hora" class="label">Hora</label>
        <input
          type="time"
          id="hora"
          class="input"
          placeholder=" "
          name="hora"
        />
        <strong class="purple-text darken-2">
            {{ $errors->first('hora') }}
        </strong>
      </div>

      <button name="accion" type="submit" class="submit">
        Registrar Cita
      </button>
    </div>
  </form>
@endsection