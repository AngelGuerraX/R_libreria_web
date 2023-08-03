
<?php 
include("bd.php");
include("templates/header.php"); 

$sentencia=$conexion->prepare("SELECT * FROM contacto");
$sentencia->execute();
$lista_de_contactos=$sentencia->fetchAll((PDO::FETCH_ASSOC));

if($_POST){
    //recoleccion de datos
    $nombre=(isset($_POST["nombre"])?$_POST["nombre"]:"");
    $Correo=(isset($_POST["Correo"])?$_POST["Correo"]:"");
    $Asunto=(isset($_POST["Asunto"])?$_POST["Asunto"]:"");
    $Comentario=(isset($_POST["Comentario"])?$_POST["Comentario"]:"");

        //preparar insercion
    $sentencia=$conexion->prepare("INSERT INTO contacto (nombre,Correo,Asunto,Comentario)
    VALUES (:nombre, :Correo, :Asunto, :Comentario)");

    //Asignando los valores de metodo post(del formulario)
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":Correo", $Correo);
    $sentencia->bindParam(":Asunto", $Asunto);
    $sentencia->bindParam(":Comentario", $Comentario);
    $sentencia->execute();
    //header("Location:index.php");
}
?> 
  <br>  
  <div class="container">
      <div class="center">
          <div class="card">
            <div class="card-body">
              <h1>CONTACTANOS</h1>
            </div>
          </div>    
          <br>
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<div class="container">
    <div class="contact__wrapper shadow-lg mt-n9">
        <div class="row no-gutters">
            <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                <h3 class="color--white mb-5">Contactanos</h3>
    
                <ul class="contact-info__list list-style--none position-relative z-index-101">
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-envelope"></i></span> Angellixandroguerrasierra@gmail.com
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-phone"></i></span> 829-348-9999
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> Angel Guerra Technologies Inc.
                        <br> Santo Domingo, Villa Carmen
                        <br> Ramon Santana #8, 2do Nivel
    
                        <div class="mt-3">
                            <a href="https://www.google.com/maps" target="_blank" class="text-link link--right-icon text-white">Ir hacia la ubicacion <i class="link__icon fa fa-directions"></i></a>
                        </div>
                    </li>
                </ul>
    
                <figure class="figure position-absolute m-0 opacity-06 z-index-100" style="bottom:0; right: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="444px" height="626px">
                        <defs>
                            <linearGradient id="PSgrad_1" x1="0%" x2="81.915%" y1="57.358%" y2="0%">
                                <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="1"></stop>
                                <stop offset="100%" stop-color="rgb(0,54,207)" stop-opacity="0"></stop>
                            </linearGradient>
    
                        </defs>
                        <path fill-rule="evenodd" opacity="0.302" fill="rgb(72, 155, 248)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                        <path fill="url(#PSgrad_1)" d="M816.210,-41.714 L968.999,111.158 L-197.210,1277.998 L-349.998,1125.127 L816.210,-41.714 Z"></path>
                    </svg>
                </figure>
            </div>
    
            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                <form action="#" class="contact-form form-validate"  method="post" enctype="multipart/form-data" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="firstName">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Angel Guerra">
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="email">Correo</label>
                                <input type="text" class="form-control" id="Correo" name="Correo" placeholder="tuCorreo@gmail.com">
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="phone">Asunto</label>
                                <input type="tel" class="form-control" id="Asunto" name="Asunto" placeholder="Asunto">
                            </div>
                        </div>
    
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="message">Comentario</label>
                                <textarea class="form-control" id="Comentario" name="Comentario" rows="4" placeholder="Escriba su comentario Aqui"></textarea>
                            </div>
                        </div>
    
                        <div class="col-sm-12 mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                        </div>
    
                    </div>
                </form>
            </div>
            <!-- End Contact Form Wrapper -->
    
        </div>
    </div>
</div>
<br> <br> <br> 
    </div>
</div>
<br>
<?php include("templates/footer.php"); ?>