<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    </head>
    <body class="content-body" >
        <!-- Navbar -->
        <div class="nav" >
            <div class="nav-container">
                <h1 class="nav-logo"><img src="./images/iconFundation.png" width="50" class="imagen-logo" alt="logo"></h1>

                <label for="menu" class="nav-label">
                    <img src="./svg/menu.svg" alt="menu" class="nav-img">
                </label>
                <input type="checkbox" id="menu" class="nav-input">
                <div class="nav-menu">
                    <a class="nav-item" href="#home">Home</a>
                    <a class="nav-item" href="#nosotros">Nosotros</a>
                    <a class="nav-item" href="#adopta">Adopta</a>
                    <a class="nav-item" href="#contacto">Contacto</a>
                    <a href="#" id="hero_cta" class="nav-item">
                        <strong>Log in
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewbox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </strong>
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <section class="modal">
            <div class="modal_container">
                <div class="container-close">
                    <a href="#" class="modal_close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </a>
                </div>
                <div class="title-modal">
                    <h1>Iniciar Sesión</h1>
                </div>
                <hr><br>
                <div class="container-form">
                    <form action="{{ route('login') }}" method="POST" class="form">
                         @csrf
                         @error('message')
                             <p>ERROR</p>
                         @enderror
                        <label for="">Correo</label><br>
                        <input type="email" name="correo" id="">
                        <label for="">Contraseña</label><br>
                        <input type="password" name="clave" id="">
                        <button class="button-form" type="submit" >
                            Iniciar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <main>
            <div class="cover" id="home" >
                <div class="cover-elements">
                    <div class="texts-cover">
                        <h1 class="title">POR AMOR A ROCKY</h1>
                        <p class="presentation">¡Bienvenido! somos una fundación que le da hogar a peluditos en Bogotá.</p><br>
                        <a class="adopt-button" href="">¡¡ADOPTAR!!</a>
                    </div>
                    <div class="image-cover">
                        <img src="{{ asset('./images/image-dog.png')}}" class="image-dog" alt="">
                    </div>
                </div>
                <div class="wake" >
                    <svg viewbox="0 0 500 150" preserveaspectratio="none" style="height: 100%; width: 100%;">
                        <path d="M-69.13,85.38 C161.11,-151.45 306.71,212.67 521.72,-23.17 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
                    </svg>
                </div>
            </div>
            <div class="information" id="nosotros" >
                    <div class="we">
                        <h1 class="information-text">NOSOTROS</h1>
                        <p class="we-text">A Pesar de llevar más de 5 años en esta labor, SHERYL SAIZ su fundadora decide constituir la fundación legalmente una vez terminara sus estudios universitarios, ya que manejar una fundación requiere conocimiento, amor,  compromiso y una gran responsabilidad. También teniendo en cuenta que la familia fue creciendo, que se hacía necesario generar alianzas que permitieran terminar la construcción del predio donde funciona la Fundación, la manutención, tratamiento veterinario y demás gastos que  garantizaran la calidad de vida de los animales que están bajo nuestro cuidado.</p>
                    </div>
                    <div class="mission">
                        <h1 class="information-text">MISIÓN</h1>
                        <p class="mission-text">Nuestra misión es articular espacios para generar conciencia del cuidado animal, adopciones responsables, campañas de esterilización, apoyo a rescatistas independientes y tareas afines, de acuerdo al modelo organizacional de una empresa, ya que contamos con un equipo de voluntarios con diversas habilidades y conocimientos que permiten el desarrollo y orientación en áreas comunes de cualquier organización.
                        </p>
                    </div>
                    <div class="vission">
                        <h1 class="information-text">VISIÓN</h1>
                        <p class="mission-text">Trabajamos para crear una red de apoyo que facilite el desarrollo de las actividades de la fundación, por medio de hogares de paso, ingresos monetarios y en especie, voluntariado, alianzas comerciales y demás actividades que permitan en un lapso de 5 años, la adopción responsable de 4000 animales entre perros y gatos, así mismo campañas con capacidad nacional de al menos el 5000 esterilizaciones anuales.</p>
                    </div>
            </div>
            <div class="adopt" id="adopta" >
                <h1 class="adopt-title">Adoptar</h1>
                <div class="container swiper mySwiper">
                    <div class="swiper-wrapper content">
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="{{asset('images/image-dog-card.png')}}" alt="">
                                </div>
                                <div class="information-dog">
                                    <h1>Peludo</h1>
                                    <p>Rocky</p>
                                </div>
                                <div class="button">
                                    <button type="button" class="adoptar">Adoptar</button>
                                    <button type="button" class="ver">Ver</button>
                                </div>
                            </div>
                        </div>
                        <!-- p -->
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="{{asset('images/image-dog-card.png')}}" alt="">
                                </div>
                                <div class="information-dog">
                                    <h1>Peludo</h1>
                                    <p>Rocky</p>
                                </div>
                                <div class="button">
                                    <button type="button" class="adoptar">Adoptar</button>
                                    <button type="button" class="ver">Ver</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="{{asset('images/image-dog-card.png')}}" alt="">
                                </div>
                                <div class="information-dog">
                                    <h1>Peludo</h1>
                                    <p>Rocky</p>
                                </div>
                                <div class="button">
                                    <button type="button" class="adoptar">Adoptar</button>
                                    <button type="button" class="ver">Ver</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="{{asset('images/image-dog-card.png')}}" alt="">
                                </div>
                                <div class="information-dog">
                                    <h1>Peludo</h1>
                                    <p>Rocky</p>
                                </div>
                                <div class="button">
                                    <button type="button" class="adoptar">Adoptar</button>
                                    <button type="button" class="ver">Ver</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="{{asset('images/image-dog-card.png')}}" alt="">
                                </div>
                                <div class="information-dog">
                                    <h1>Peludo</h1>
                                    <p>Rocky</p>
                                </div>
                                <div class="button">
                                    <button type="button" class="adoptar">Adoptar</button>
                                    <button type="button" class="ver">Ver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <footer class="footer">
                <div class="contact" id="contacto" >
                    <h1 class="contact-title">Contacto</h1>
                    <div class="social-networks">
                        <!-- <a href=""></a>
                        <a href=""></a>
                        <a href=""></a> -->
                        <img src="{{ asset('./images/logo-facebook.png')}}" class="social-icon" alt="">
                        <img src="{{ asset('./images/logo-twitter.png')}}" class="social-icon" alt="">
                        <img src="{{asset('./images/logo-instagram.png')}}" class="social-icon" alt="">
                    
                    </div>
                    <div class="contact-foot">
                        <p>Correo: fundación@poramorarocky.com</p>
                        <p>Whatsapp: 3193020540</p>
                    </div>
                </div>

            </footer>
        </main>
        <!-- Javascrip -->
        <script src="{{asset('js/home.js')}}"></script>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            });
        </script>
    </body>
</html>
