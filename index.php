<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta description-->
    <meta
      name="description"
      content="ZALT la mejor empresa de logistica" />
    <!--palabras claves seo-->
    <meta name="keywords" content="html,css,js,bootstrap" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"/>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/main.css" />
    <title>Inicio</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"/>
  </head>
  <body>
    <!--titulo de pagina y el menu de bootstrap modfificado tiene los anchor de cada html-->
    <header>
     
      <h3>ZALT Soluciones Logisticas</h3>
    
      <div class="grid-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary" >
          <a class="navbar-brand" href="#" ><img src="./img/logo 1.jpg" alt=""></a> 
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navHeaderItems">
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">INICIO<span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/quienesomos.html">QUIENES SOMOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/servicios.html"> SERVICIOS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="./pages/noticias.html"> NOTICIAS </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pages/contacto.html"> CONTACTO</a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <!--carrusel de bootstarp-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img height="200px" width="200px" src="./img/carrusel/Como-crear-empresa-logistica.jpg" class="d-block w-100" alt="imagen" />
        </div>
        <div class="carousel-item">
          <img height="200px" width="200px" src="./img/carrusel/logistica.jpg" class="d-block w-100" alt="imagen1" />
        </div>
        <div class="carousel-item">
          <img height="200px" width="200px" src="./img/carrusel/Funciones-logsticas-en-la-empresa.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img height="200px" width="200px" src="./img/carrusel/logística-internacional-scaled.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <a href="#carouselexample" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">anterior</span>
      </a>
      <a href="#carouselexample" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">siguiente</span>
      </a>
    </div>
       <script $('.carousel').carousel({interval: 500})>
</script>
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
   <!-- link javascript-->
    <script src="./main.js"></script>
  </body>
   <!--pie de pagina con un aplicativo de calificacion de pagina, los datos quedan guardados en el local storage que se encuentra en main.js-->
    
   <footer id="calificacion"  bg-primary>
   
    <div class="fixed-bottom bg-primary">
      <small>&copy; Analisis y Desarrollo De Sofware N 2455227</small>
  </div>
  </ul>
  <div class="col-12 bg-primary">
      <div class="card ">
          <div class="card-header bg-primary">
              <div id="promedio-calificacion"></div>
          </div>
          <div class="card-body bg-primary ">
              <div class="col-12 " style="text-align: center ; ">
                  
                  <h5 class="card-title">Califica Nuestra Aplicacion</h5>
                  
                  
                  <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                  <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                  <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                  <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                  <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
<br>
                  <button class="btn btn-danger" onclick="mensaje()">calificar
                  </button>
                  <br>
                  <div class="alert alert-success" id="alert-success" style="display: none;">
                      <strong>Listo!</strong> <p id="calificacion-usuario"></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <img class="floter" src="../img/FLOTER.jpg" alt="">

    
  </footer >
  <!--link de boostrap para javascrip-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

</html>
