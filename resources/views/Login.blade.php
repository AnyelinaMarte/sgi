<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
            <link rel="stylesheet" href="{{ asset('Css/Normalize.css') }}">
            <link rel="stylesheet" href="{{ asset('Css/Login.css') }}">
    </head>
    <body>
        <section class="grid-login">

        <div class="grid-login-1">
                <h1>Login</h1>

                <h3>Bienvenido a Sistema de Inventario</h3>
                <form>
                    <div>
                        <!-- <label>Usuario</label><br> -->
                        <input type="email" placeholder="Ingresa tu correo"/>
                    </div>
                    <div>
                        <!-- <label>Contraseña</label><br> -->
                        <input type="password" placeholder="Ingresa tu contraseña"/>
                    </div>
                    <div class="registro-a">
                        <a href="/Registro">Ya tienes una cuenta <br>¿Registrase aquí? </a>
                    </div>
                    <div>
                        <button type="submit">Inciar Seccion</button>
                    </div>
                </form>
            </div>

            <div class="grid-login-2">
                <div class="grid-t-blue">
                    <nav>
                        <h6>SGI</h6>
                        <ul>
                            <li><a href="#">Casa</a></li>
                            <li><a href="#">Asistente</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </nav>
                    <div>
                        <h1></h1>           
                         <p></p>
                    </div>
                </div>
            </div>


        </section>
    </body>
</html>
