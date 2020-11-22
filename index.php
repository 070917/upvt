<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" CONTENT="Autor: A.C. Daniel, Ilustrador: A. Ilustración, Categoría: Desarrollo Web, Precio: 25 $, Número de páginas: 10">
    <title>DevelopMan: Desarrollo Web en la red de Tor Mexico.</title>
    <meta name="robots" content="noindex,nofollow">
    <link href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Thasadith:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="site-header">
        <nav>
            <a href="index.php">Inicio</a>
            <a href="#contacto">Contacto</a>
            <a href="#servicios">Nuestros Servicios</a>
            <a href="/pag/login.php">Login</a>
        </nav>
    </header>

    <div class="hero">
        <div class="contenedor-hero">
            <h1>DevelopMan</h1>
            <p><i class="fas fa-map-marker-alt"></i>Ciudad de Mexico</p>
            <a href="https://api.whatsapp.com/send?phone=?" class="boton" target="_blanck">Contactar</a>

        </div>
    </div>
<div class="contenedor">
    <main class="servicios" id="servicios">
        <h2>Nuestros Servicios</h2>
        <div class="contenedor-servicios">
            <div class="servicio">
                <h3>Diseño Web</h3>
                <div class="iconos">
                    <i class="fas fa-pen-nib"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum labore animi ad perferendis non beatae eligendi itaque quisquam quibusdam quo voluptate neque corporis sit voluptas quasi similique, aspernatur optio. Ducimus.</p>
            </div>
            <div class="servicio">
                <h3>Aplicaciones Moviles</h3>
                <div class="iconos">
                    <i class="fab fa-android"></i>
                    <i class="fab fa-apple"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum labore animi ad perferendis non beatae eligendi itaque quisquam quibusdam quo voluptate neque corporis sit voluptas quasi similique, aspernatur optio. Ducimus.</p>
            </div>
            <div class="servicio">
                <h3>Social Media</h3>
                <div class="iconos">
                    <i class="fab fa-twitter"></i>
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum labore animi ad perferendis non beatae eligendi itaque quisquam quibusdam quo voluptate neque corporis sit voluptas quasi similique, aspernatur optio. Ducimus.</p>
            </div>
        </div>
    </main>

    <section id="contacto" class="contacto" >
        <h2>Contacto</h2>
        <form action="" method="post">
            <legend>Contactame llenando todos los campos</legend>

            <div class="contenedor-campos">
                <div class="campo">
                    <label>Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="campo">
                        <label>Telefono</label>
                        <input type="tel" name="telefono" placeholder="Telefono">
                    </div>
                <div class="campo w-100">
                        <label>Correo</label>
                        <input type="email" name="correo" placeholder="Correo">
                    </div>
                <div class="campo w-100">
                        <label>Mensaje</label>
                        <textarea name="mensaje"></textarea>
                    </div>
            </div>
            <div class="enviar">
                <input type="submit" class="boton" value="Enviar" name="enviar">
            </div>
        </form>

        <?php

        require_once ("contacto.php");
        $obje = new Contacto();

        if (isset($_POST["enviar"])) {
          $LastName = $_POST["nombre"];
          $Nphone = $_POST["telefono"];
          $Email = $_POST["correo"];
          $Message = $_POST["mensaje"];

          $obje->contactar($LastName,$Nphone,$Email,$Message);

          echo "<h2>Informacion enviada, Gracias!</h2>";

        }

        ?>

    </section>
</div>
</body>
</html>
