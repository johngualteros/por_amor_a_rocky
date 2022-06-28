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
            <form action="/registerAdoption" method="POST" class="form-container">
                <div class="container-form-input">
                    <!-- Primera fila-->
                    <div class="input-container">
                        <label for="nombre">Nombres <span class="text-red">*</span></label><br>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div class="input-container mt">
                        <label for="apellidos">Apellidos <span class="text-red">*</span></label><br>
                        <input type="text" name="apellidos" id="apellidos">
                    </div>
                </div>
                <!-- Contenedor Segunda Fila -->
                <div class="container-form-input-2">
                    <!-- Segunda fila -->
                    <div class="input-container">
                        <label for="Documento">Documento <span class="text-red">*</span></label><br>
                        <input type="file" name="Documento" id="Documento">
                    </div>
                    <div class="input-container">
                        <label for="numeroDocumento">Número Documento <span class="text-red">*</span></label><br>
                        <input type="text" name="numeroDocumento" id="numeroDocumento">
                    </div>
                    <div class="input-container">
                        <label for="celular">Celular <span class="text-red">*</span></label><br>
                        <input type="text" name="celular" id="celular">
                    </div>
                    <!-- Tercera fila -->
                    <div class="input-container">
                        <label for="numeroPersonasReside">N° núcleo familiar <span class="text-red">*</span></label><br>
                        <input type="text" name="numeroPersonasReside" id="numeroPersonasReside">
                    </div>
                    <div class="input-container">
                        <label for="correo">Correo <span class="text-red">*</span></label><br>
                        <input type="email" name="correo" id="correo">
                    </div>
                    <div class="input-container">
                        <label for="direccion">Dirección <span class="text-red">*</span></label><br>
                        <input type="text" name="direccion" id="direccion">
                    </div>
                    <!-- Cuarta fila -->
                    <div class="input-container">
                        <label for="sueldo">Sueldo <span class="text-red">*</span></label><br>
                        <select type="text" name="sueldo" id="sueldo">
                            <option value="1 smlv - 2 smlv">1 SMLV - 2 SMLV</option>
                            <option value="3 smlv - 4 smlv">3 SMLV - 4 SMLV</option>
                            <option value="mas de 5 smlv">MÁS DE 5 SMLV</option>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="peludito">Peludito a adoptar <span class="text-red">*</span></label><br>
                        <input type="text" name="peludito" id="peludito">
                    </div>
                    <div class="input-container">
                        <label for="zonaVivienda">Zona Vivienda <span class="text-red">*</span></label><br>
                        <input type="number" name="zonaVivienda" id="zonaVivienda">
                    </div>
                    <!-- Quinta fila -->
                    <div class="input-container">
                        <label for="empresa">Empresa <span class="text-red">*</span></label><br>
                        <input type="text" name="empresa" id="empresa">
                    </div>
                    <div class="input-container">
                        <label for="contactoEmpresa">Contacto Empresa <span class="text-red">*</span></label><br>
                        <input type="email" name="contactoEmpresa" id="contactoEmpresa">
                    </div>
                    <div class="input-container">
                        <label for="celularEmpresa">Celular Empresa <span class="text-red">*</span></label><br>
                        <input type="email" name="celularEmpresa" id="celularEmpresa">
                    </div>
                </div>

                <!-- Contenedor boton -->
                <div class="button">
                    <a href="#">
                        <button type="button" class="ov-btn-slide-right" onclick="alertConfirm()">
                            Enviar
                        </button>
                    </a>
                </div>
            </form>
        </section>
    </div>
@endsection
