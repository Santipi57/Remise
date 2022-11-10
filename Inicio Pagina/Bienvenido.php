<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
                alert("Porfavor debes iniciar sesión");
                window.location = "../Login.html";
        </script>
        ';
        header("location:Login.html");
        session_destroy();
        die();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remise</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/Inicio.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/Cards.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

    
    <header>
        <div class="container__header">

            <div class="logo">
                <img src="media/WhatsApp_Image_2022-09-01_at_6.28.15_PM__1___1_-removebg-preview.png" alt="">
            </div>

            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="media/WhatsApp_Image_2022-09-01_at_6.28.15_PM__1___1_-removebg-preview.png" alt="">
                    <ul>
                        <li><a href="index.html" id="selected">Inicio</a></li>
                        <li><a href="Nosotros.html">Nosotros</a></li>
                        <li><a href="Contacto.html">Contacto</a></li>
                        <li><a href="Productos.html">Productos</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header__register">
                <a href="Login.html">
                <input type="button" class="btn__header__register" value="Mi cuenta">
            </a>
            </div>
        </div>

    </header>

    <main>
        <div class="cover">
            <div class="text__information-cover">
                <h1>Haz mas que comprar 
                    empieza a ahorrar con descuentos unicos</h1>
                <p>Inicia sesion o registrate para empezar a comprar </p>

                <div class="buttons__cover">
                    <a href="sign up.html">
                    <input type="button" class="btn__register-cover" value="Registrarse" >
                </a>
                </div>

            </div>

            <div class="media__cover">
                <img src="media/Captura.PNG" alt="">
            </div>

        </div>
        
        <div class="container__banner">

            <div class="banner">
                <div class="banner__paloma-marcas">
                    <img src="media/8703953_folder_file_document_icon.png" id="paloma_marcas" alt="">
                </div>
                <div class="banner__icon-fire">
                    <img src="media/fire-dynamic-color-removebg-preview.png" id="icon_fire" alt="">
                </div>
                <div class="banner__text">
                    <h2>Mira nuestras marcas afiliadas y sus promociones</h2>
                        <a href="Marcas.html">Leer más</a>
                </div>
            </div>
        </div>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="media/WhatsApp_Image_2022-09-01_at_6.28.15_PM__1___1_-removebg-preview.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>CONTACTANOS</h2>
                <p>57(5847)764-33-72</p>
                <a href="#">remise.com@gmail.com</a>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=100084115364969" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/remisepage/?utm_source=qr" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/remise2022?t=OWyZ9K269a8apDkzZj_Nqg&s=09" class="fa fa-twitter"></a>
                </div>
            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2022 <b>Remise</b></p>
        </div>
    </footer>

    <div class="container">
      <div class="container loader" id="loader">
            <div class="circular-progress">
                <span class="progress-value">0%</span>
            </div>

            <span class="text">Remise </span>
        </div>

    </div>

        <!-- JavaScript -->
        <!--<script src="js/script.js"></script>-->

    <script src="js/script.js"></script>
    <script src="js/scriptlo.js"></script>
    <script src="js/main.js"></script>
</body>
</html>