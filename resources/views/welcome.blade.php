<!DOCTYPE html>
<html lang="en">
<!-- Proyecto realizado por Izan Soriano -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angel de la Guarda</title>
    <link rel="stylesheet" href="{{ asset('css/guarde.css') }}">
</head>


<body>
    <header>
        <div class="header__logo-box">
            <a href=""><img src="{{asset('images/logo.png')}}" alt="logo" class="header__logo"></a>
        </div>
        <div class="header__burger-box">
            <img src="{{asset('images/burger-menu.svg')}}" alt="" class="header__burger" onclick="openModal()"><!--La hamburguesa ya desplegara todas las opciones, pero para que veas el modal en la version de movil haz click en la hamburguesa y saldra  -->
        </div>
        <nav class="header__nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#" class="nav__link">Inscripcion</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Instalaciones</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Contactanos</a></li>
            </ul>
            @if (Route::has('login'))
                <button class="btn btn--login" onclick="openModal()">Iniciar Sesion</button>
                <a href="{{ route('register') }}" class="btn btn--register">Registarse</a>
            @endif
        </nav>
    </header>

    <!-- El modal tiene un display:none por defecto. He usado una funcion de JavaScript para poder abrilo al clickar -->
    <div id="register-modal" class="register-modal">
        <span class="close-modal" onclick="closeModal()">x</span>
        <h2 class="register-modal__title">Iniciar Sesion</h2>

        <form class="register-modal__form" method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email" class="register-modal__label" >Email:</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror register-modal__input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus required />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="password" class="register-modal__label">Contraseña:</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror register-modal__input" name="password" required autocomplete="current-password"/>

            <button class="btn btn--modal" type="submit">Enviar</button>
        </form>
    </div>

    <main>
        <section class="inicio">
            <div class="inicio__text-box">
                <p>Tranquilos, nosotras cuidamos de vuestros peques</p>
                <span>En la E.I.M. Angel de la Guarda nosotras nos encargamos cuidar a tus hijos y prepararlos para la
                    entrada a la escuela. ¡Reserva su plaza ya mismo!</span>
                <a href="{{ route('login') }}" class="btn">Reservar</a>
            </div>
        </section>
        <section class="features">
            <div class="grid">
                <div class="row">
                    <article class="features__article col-1-2">
                        <img src="{{asset('images/comedor.jpg')}}" alt="" class="features__img">
                        <div class="features__text-box">
                            <p>Deja a tus peques en nuestro comedor, donde nuestras cocineras preparan comida sana y
                                varida.
                            </p>
                        </div>
                        <a href="" class="btn">Ver Menu</a>
                    </article>
                    <article class="features__article col-1-2">
                        <img src="{{asset('images/aula.webp')}}" alt="" class="features__img">
                        <div class="features__text-box">
                            <p>Nuestras aulas disponen de todo lo necesario para que tus niños se diviertan a la par que
                                aprenden.</p>
                        </div>
                        <a href="" class="btn">Mas Fotos</a>
                    </article>
                </div>
                <article class="features__article">
                    <img src="{{asset('images/senyo.jpg')}}" alt="" class="features__img">
                    <div class="features__text-box">
                        <p>Nuestras seños son personas que disfrutan más que nada el enseñar y cuidar de sus niños
                        </p>
                    </div>
                    <a href="" class="btn">Nuestras seños</a>
                </article>
            </div>
        </section>
    </main>

    <footer class="grid">
        <div class="footer__desktop row">
            <div class="footer__start col-1-4">
                <div class="footer__logo-box">
                    <img src="{{asset('images/logo_letras.png')}}" alt="" class="footer__logo">
                </div>
                <p>Escuela Infantil Municipal Angel de la Guarda</p>
                <div class="footer">
                    <ul>
                        <li><a href="#" class="footer__link">angeldelaguarda@outlook.com</a></li>
                        <li><a href="#" class="footer__link">926557124</a></li>
                        <li><a href="#" class="footer__link">Catral, Alicante, España</a></li>
                    </ul>
                </div>
            </div>
            <div class="row col-2-4 footer_content">
                <div class="col-1-3">
                    <p>Instalaciones</p>
                    <ul>
                        <li><a href="#" class="footer__link">Comedor</a></li>
                        <li><a href="#" class="footer__link">Sala de camas</a></li>
                        <li><a href="#" class="footer__link">Aulas</a></li>
                    </ul>
                </div>
                <div class="col-1-3">
                    <p>Menu</p>
                    <ul>
                        <li><a href="#" class="footer__link">Celiacos</a></li>
                        <li><a href="#" class="footer__link">Diabeticos</a></li>
                        <li><a href="#" class="footer__link">Proveedores</a></li>
                    </ul>
                </div>
                <div class="col-1-3">
                    <p>Actividades</p>
                    <ul>
                        <li><a href="#" class="footer__link">Excursiones</a></li>
                        <li><a href="#" class="footer__link">Talleres</a></li>
                    </ul>
                </div>
                <div class="col-1-4">

                </div>
            </div>
            <div class="footer__redes col-1-4">
                <a href=""><img src="{{asset('images/instagram.png')}}" alt="" class="redes__img"></a>
                <a href=""><img src="{{asset('images/facebook.png')}}" alt="" class="redes__img"></a>
                <a href=""><img src="{{asset('images/linkedin.png')}}" alt="" class="redes__img"></a>
            </div>
        </div>
        <!-- Tengo dos footers distintos para desktop y movil. El mixin va cambiando el display de ambos entre none y block -->
        <div class="footer__mobile">
            <div class="row">
                <div class="footer__logo-box col-1-2">
                    <img src="img/logo_letras.png" alt="" class="footer__logo">
                </div>
                <div class="footer__redes col-1-2">
                    <a href=""><img src="{{asset('images/instagram.png')}}" alt="" class="redes__img"></a>
                    <a href=""><img src="{{asset('images/facebook.png')}}" alt="" class="redes__img"></a>
                    <a href=""><img src="{{asset('images/linkedin.png')}}" alt="" class="redes__img"></a>
                </div>
            </div>
            <div class="row">
                <ul>
                    <li><a href="">Instalaciones</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Actividades</a></li>
                </ul>
            </div>

        </div>
    </footer>
    <script src="{{ asset('js/modal.js') }}"></script>
</body>

</html>