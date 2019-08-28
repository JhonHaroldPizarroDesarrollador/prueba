<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> --}}
        <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css') }}"/>
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .container{
                margin: 0 auto;
                width: 80%;
                margin-bottom:80px;
            }
            .hero{
                background-image: url(https://via.placeholder.com/1920x1024);
                min-height:400px;
                background-position: center;
                background-size: cover;
                flex-wrap: wrap;

            }
            .hero h2, .hero .title{
                width: 100%;
            }
            .item{
                display: inline-grid;
            }
            .item span{
                margin-top:15px;
                width: 100%;
                
            }
            .slick-prev:before, .slick-next:before {
                color: gray;
            }
            .slick-initialized .slick-slide {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            #suscribete{
                display: flex;
            }
            #suscribete div{
                min-width: 50%;
            }
            footer{
                height: 150px;
                background-color: gray
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>                
                <div class="m-b-md hero flex-center">
                    <div class="title m-b-md ">
                        Landing Page
                    </div>
                    <br>
                    <a href="#suscribete">Suscribete!</a>

                </div>
                <div class="container productos">
                    <h2>Productos Destacados</h2>
                    <div class="sliderproductos">
                        <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                         <div class="item">
                            <img src="https://via.placeholder.com/220" alt="">
                            <span>Nombre Producto</span>
                        </div>
                    </div>
                </div>
                <div class="container clientes">
                    <h2>Nuestros Clientes</h2>
                    <div class="sliderClientes">
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                        <div>
                            <img src="https://via.placeholder.com/50" alt="">
                        </div>
                    </div>
                </div>
                <div class="container formulario" id="suscribete">
                    <div>
                        <h2>Subscribete</h2>
                        <form action="{{ url('api/form') }}" method="POST">
                        <p>
                        <label>Nombre</label><br>
                        <input type="text" id="nombre" name="nombre">
                        </p>
                        <p>
                        <label>Phone number</label><br>
                        <input type="text" id="telefono" name="telefono">
                        </p>
                        <p>
                        <label>Email</label><br>
                        <input type="email" id="correo" name="correo" required>
                        </p>
                        <p>
                        <label>asunto</label><br>
                        <input type="text" id="asunto" name="asunto">
                        </p>
                        <p>
                        <label>Mensaje</label><br>
                        <input type="text" id="mensaje" name="mensaje">
                        </p>
                        <p>
                        <button>Suscribirse</button>
                        </p>
                        </form>
                    </div> 
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7725.157354462744!2d-75.69425596998697!3d4.811091445413205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7c41fe10a32946a!2sPlaza%20Bol%C3%ADvar%2C%20Escultura%20Bol%C3%ADvar%20Desnudo%20Arenas%20Betancourt!5e0!3m2!1ses-419!2sco!4v1566952549785!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
            <footer class="flex-center">
            <center>
                <p>Jhon Pizarro</p>
            </center>
            </footer>
        </div>



         <!-- jQuery -->
				
        <script src="{{asset('js/jquery.min.js') }}"></script>
        <script src="{{asset('slick/slick.min.js') }}"></script>
        <script src="{{asset('js/custom.js') }}"></script>

    </body>
</html>
