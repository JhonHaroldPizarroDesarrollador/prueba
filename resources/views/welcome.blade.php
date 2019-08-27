<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



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
                margin-bottom:40px;
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
                margin-top:15px 
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
                    fgfdg
                </div>
                <div class="container formulario" id="suscribete">
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

            </div>
        </div>


         <!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>



<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				

         <script src="{{asset('js/custom.js') }}"></script>

    </body>
</html>
