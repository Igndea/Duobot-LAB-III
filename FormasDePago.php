<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM forma_de_pago";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Formas De Pago </title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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


    </style>

    </head>

    <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
                  <a class="nav-item nav-link active" href="http://localhost:8080/crudtest/FormasDePago.php">Formas de Pago<span class="sr-only">(current)</span></a>
                </div>
              </div>
          </nav>
        </div>


        <div class="row">
            <div class="col-md-3 justify-content-center m-3">
                <h1>Ingrese datos</h1>
                <form action="crear.php" method="POST">

                    <input type="text" class="form-control mb-3" name="fm_nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="fm_descripcion" placeholder="Descripcion">
                    <input type="text" class="form-control mb-3" name="fm_codigo" placeholder="Codigo">
                    <input type="hidden" name="page" value="FormasDePago">
                    <input type="submit" class="btn btn-primary">
                </form>
                <br>
<!--
                <form action="actualizar.php" method="POST">
            
                        <input type="text" class="form-control mb-3" name="ID_fm" placeholder="ID">
                        <input type="text" class="form-control mb-3" name="fm_nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="fm_descripcion" placeholder="Descripcion">
                        <input type="text" class="form-control mb-3" name="fm_codigo" placeholder="Codigo">
                        <input type="hidden" name="page" value="FormasDePago">
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </form>    -->                      
            </div>
                
            <div class="col-7 ml-5">
                <h1>Formas de Pago</h1>
                <table class="table table-striped" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Codigo</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['ID_fm']?></th>
                                    <th><?php echo $row['fm_nombre']?></th>
                                    <th><?php echo $row['fm_descripcion']?></th> 
                                    <th><?php echo $row['fm_codigo']?></th> 
                                    <th><a href="actualizarFP.php?id=<?php echo $row['ID_fm'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="eliminar.php?id=<?php echo $row['ID_fm'] ?>&page=FormasDePago" class="btn btn-danger">Eliminar</a></th>                                        
                                </tr>
                            <?php 
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div> 
        

        <footer class="text-white" style="background-color: #f1f1f1;">
            <div id="icons" class="text-center text-dark" style="background-color: rgba(0, 0, 0, 0.2);">
                DUOBOT ?? 2020
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