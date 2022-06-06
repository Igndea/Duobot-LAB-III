<!DOCTYPE html>
<html>
    <head>
        <title>Inicio </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="C:\Users\falet\OneDrive\Escritorio\Lab Project\CRUD\Pages\Master.css">
    
        <style> 
            *{
                font-size: 15px;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            body{
                background-image: url("https://i2.wp.com/www.ircoiluminacion.com/wp-content/uploads/2017/07/White-Wallpaper-For-Pc.jpg");
                background-repeat: repeat-y;
                overflow-x: hidden;
                overflow-y: hidden;
            }

            #navbarNavAltMarkup{
                align-items: flex-end;
                justify-content: center;
            }

            .navbar{
                height: 60px;
            }

            .navbar-nav{
                column-gap: 30px;
            }

            a{
                font-size:large;
            }

            i{
                font-size: x-large;
            }

            .nav-link:hover{
                -webkit-animation: text-shadow-pop-bottom 0.6s both;
                        animation: text-shadow-pop-bottom 0.6s both;
            }

            @-webkit-keyframes text-shadow-pop-bottom {
                0% {
                text-shadow: 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555;
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                }
                100% {
                text-shadow: 0 1px #555555, 0 2px #555555, 0 3px #555555, 0 4px #555555, 0 5px #555555, 0 6px #555555, 0 7px #555555, 0 8px #555555;
                -webkit-transform: translateY(-8px);
                        transform: translateY(-8px);
                }
            }
            @keyframes text-shadow-pop-bottom {
                0% {
                text-shadow: 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555, 0 0 #555555;
                -webkit-transform: translateY(0);
                        transform: translateY(0);
                }
                100% {
                text-shadow: 0 1px #555555, 0 2px #555555, 0 3px #555555, 0 4px #555555, 0 5px #555555, 0 6px #555555, 0 7px #555555, 0 8px #555555;
                -webkit-transform: translateY(-8px);
                        transform: translateY(-8px);
                }
            }

            footer{
                position: absolute;
                bottom: 0;
                width: 100%;
            }

            .btn-link{
                padding: 0, 1px,0,0;
                align-items: flex-end;
            }
            
            #desk{
                height: 613px;
                width: 409px;
            }


            .paragraph {
                -webkit-animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) 1s both;
                        animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) 1s both;
                position: absolute;
                top: 24%;
                font-family: math;
                width: 85%;
                left: 8%;
            }

            @-webkit-keyframes text-focus-in {
                0% {
                -webkit-filter: blur(12px);
                        filter: blur(12px);
                opacity: 0;
                }
                100% {
                -webkit-filter: blur(0px);
                        filter: blur(0px);
                opacity: 1;
                }
            }
            @keyframes text-focus-in {
                0% {
                -webkit-filter: blur(12px);
                        filter: blur(12px);
                opacity: 0;
                }
                100% {
                -webkit-filter: blur(0px);
                        filter: blur(0px);
                opacity: 1;
                }
            }

            .myTitle {
                -webkit-animation: tracking-in-expand 1s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
                animation: tracking-in-expand 1s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
                display: flex;
                font-weight: bold;
                position: relative;
                top: 10%;
                font-family: math;
                left: 10%;
            }

            @-webkit-keyframes tracking-in-expand {
                0% {
                letter-spacing: -0.5em;
                opacity: 0;
                }
                40% {
                opacity: 0.6;
                }
                100% {
                opacity: 1;
                }
            }
            @keyframes tracking-in-expand {
                0% {
                letter-spacing: -0.5em;
                opacity: 0;
                }
                40% {
                opacity: 0.6;
                }
                100% {
                opacity: 1;
                }
            }
        </style>
    
    </head>
    <body>
    <div>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a href="http://localhost:8080/crudtest/Inicio.php"> <img src="http://localhost:8080/crudtest/Assets/logo.png" style="width:55px; height:55px;"> </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                  <a class="nav-item nav-link"        href="http://localhost:8080/crudtest/Resumen.php">Resumen</a>
                  <a class="nav-item nav-link"        href="http://localhost:8080/crudtest/Empresas.php">Empresas</a>
                  <a class="nav-item nav-link"        href="http://localhost:8080/crudtest/Cuentas.php">Cuentas</a>
                  <a class="nav-item nav-link"        href="http://localhost:8080/crudtest/Movimientos.php">Movimientos</a>
                  <a class="nav-item nav-link"        href="http://localhost:8080/crudtest/FormasDePago.php">Formas de Pago</a>
                </div>
              </div>
          </nav>
        </div>

        <div class="row">
          <div class="col-8">
            <h1 class="myTitle">BIENVENIDOS AL GESTOR CONTABLE</h1>
            <h3 class="paragraph">Diseñado especialmente para que pueda crear, 
              borrar y modificar el ámbito contable de una empresa, véase los
               movimientos y sus tipos, las cuentas y subcuentas, formas de pago 
               y distintos resúmenes del ambito. </br>
               Podrá cargar y visualizar una síntesis de los movimientos por cuenta o por mes,
               permitiendo la carga, eliminación y edición de sus empresas y sus formas 
               de pago, de esta forma tendrá perfectamente accesible toda su contabilidad.
              </h3>
          </div>
          <div class="col-4">
            <img id="desk" src="http://localhost:8080/crudtest/Assets/work.gif">
          </div>
        </div>

        <footer class="text-white" style="background-color: #f1f1f1;">
          <div id="icons" class="text-center text-dark" style="background-color: rgba(0, 0, 0, 0.2);">
            DUOBOT © 2020
            <a
                class="btn btn-link btn-floating btn-lg text-dark ml-3"
                href="https://www.facebook.com/lucholitwin"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-facebook-f"></i
              ></a>
        
              <a
                class="btn btn-link btn-floating btn-lg text-dark "
                href="https://www.twitter.com/lucholitwin"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-twitter"></i
              ></a>
        
              <a
                class="btn btn-link btn-floating btn-lg text-dark "
                href="https://www.google.com/lucholitwin"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-google"></i
              ></a>
        
              <a
                class="btn btn-link btn-floating btn-lg text-dark "
                href="https://www.instagram.com/lucholitwin"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-instagram"></i
              ></a>
        
              <a
                class="btn btn-link btn-floating btn-lg text-dark"
                href="https://ar.linkedin.com/in/luciano-litwin-a7a601216?trk=people-guest_people_search-card&original_referer=https%3A%2F%2Fwww.google.com%2F"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-linkedin"></i
              ></a>
            <a class="text-dark" href="#"></a>
          </div>

        </footer>
    </body>
</html>