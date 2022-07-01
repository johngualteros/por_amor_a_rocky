@extends('layouts.base')
@section('content')
    <!-- Contenedor de el formulario main -->
    <div class="container">
        <!-- Contenedor del formulario -->
        <section class="container-form-register">
            <!-- contenedor de el logo titulo y boton de confirmar -->
            <section class="header-container-form">
                <!-- Contenedor logo -->
                <div class="logo">
                    <img src="https://poramorarocky.com/wp-content/uploads/2020/04/FondoRecurso-5.png"
                        alt="logo Por amor a rocky" class="img-container-form">
                </div>
                <!-- contenedor titulo -->
                <div class="title">
                    <h1>Solicitar Una Adopción</h1>
                </div>
            </section>
            <!-- Form -->
            <form action="{{ route('solicitarAdopcion.store') }}" method="POST" class="form-container"
                enctype="multipart/form-data">
                @csrf
                <!-- Contenedor de los campos del formulario -->
                <div class="container-form-input">
                    <div class="input-container">
                        <label for="documento">Documento <span class="text-red">*</span></label><br>
                        <input type="file" name="documento" id="documento">
                        <div class="validation-message">
                            {{ $errors->first('documento') }}
                        </div>
                    </div>
                </div>
                <div class="container-form-input-2">
                    <div class="input-container">
                        <label for="numeroDocumento">Número Documento <span class="text-red">*</span></label><br>
                        <input type="number" name="numeroDocumento" id="numeroDocumento">
                        <div class="validation-message">
                            {{ $errors->first('numeroDocumento') }}
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="nombre">Nombre <span class="text-red">*</span></label><br>
                        <input type="text" name="nombre" id="nombre">
                        <div class="validation-message">
                            {{ $errors->first('nombre') }}
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="apellidos">Apellidos <span class="text-red">*</span></label><br>
                        <input type="text" name="apellidos" id="apellidos">
                        <div class="validation-message">
                            {{ $errors->first('apellidos') }}
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="fechaNacimiento">Fecha de Nacimiento <span class="text-red">*</span></label><br>
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento">
                        <div class="validation-message">
                            {{ $errors->first('fechaNacimiento') }}
                        </div>
                    </div>

                    <div class="input-container">
                        <label for="numeroPersonasReside">N° Personas Reside <span class="text-red">*</span></label><br>
                        <input type="number" name="numeroPersonasReside" id="numeroPersonasReside">
                        <div class="validation-message">
                            {{ $errors->first('numeroPersonasReside') }}
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="contactoEmpresa">Contacto Empresa <span class="text-red">*</span></label><br>
                        <input type="text" name="contactoEmpresa" id="contactoEmpresa">
                        <div class="validation-message">
                            {{ $errors->first('contactoEmpresa') }}
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="celular">Celular <span class="text-red">*</span></label><br>
                        <input type="text" name="celular" id="celular">
                        <div class="validation-message">
                            {{ $errors->first('celular') }}
                        </div>
                    </div>

                    <div class="input-container">
                        <label for="correo">Correo <span class="text-red">*</span></label><br>
                        <input type="email" name="correo" id="correo">
                        <div class="validation-message">
                            {{ $errors->first('correo') }}
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="direccion">Dirección <span class="text-red">*</span></label><br>
                        <input type="text" name="direccion" id="direccion">
                        <div class="validation-message">
                            {{ $errors->first('direccion') }}
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="empresaTrabaja">Empresa<span class="text-red">*</span></label><br>
                        <input type="text" name="empresaTrabaja" id="empresaTrabaja">
                        <div class="validation-message">
                            {{ $errors->first('empresaTrabaja') }}
                        </div>
                    </div>
                    <!-- Cuarta fila -->
                    <div class="input-container">
                        <label for="sueldo">Sueldo <span class="text-red">*</span></label><br>
                        <select type="text" name="sueldo" id="sueldo">
                            <option value="1 smlv - 2 smlv">1 SMLV - 2 SMLV</option>
                            <option value="3 smlv - 4 smlv">3 SMLV - 4 SMLV</option>
                            <option value="mas de 5 smlv">MÁS DE 5 SMLV</option>
                        </select>
                        <div class="validation-message">
                            {{ $errors->first('sueldo') }}
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="zonaVivienda">Zona Vivienda <span class="text-red">*</span></label><br>
                        <select type="number" name="zonaVivienda" id="zonaVivienda">
                            @foreach ($optionsZone as $optionZone)
                                <option value="{{ $optionZone }}">{{ $optionZone }}</option>
                            @endforeach
                        </select>
                        <div class="validation-message">
                            {{ $errors->first('zonaVivienda') }}
                        </div>
                    </div>
                </div>

                <!-- Contenedor boton -->
                <div class="button">
                    <a onclick="alertConfirm()">
                        <button type="submit" class="ov-btn-slide-right">
                            Enviar
                        </button>
                    </a>
                </div>
            </form>
        </section>
    </div>
@endsection
