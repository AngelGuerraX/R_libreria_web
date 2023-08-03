
<?php 
include("bd.php");
include("templates/header.php"); 
?> 
  <br>  
  <div class="container">
      <div class="center">
          <div class="card">
            <div class="card-body">
              <h1>BIENVENIDOS A LA LIBRERIA</h1>
            </div>
          </div>    
          <br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="img/img1.jpg" height="250" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Libros</h5>
        <p class="card-text">Ver Libros.</p>
        <a name="" id="" class="btn btn-dark" href="<?php echo $ruta_base ?>libros.php" role="button">Ver Libros</a> 
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="img/img4.jpg" height="250" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Autores</h5>
        <p class="card-text">Ver autores de libros.</p>
        <a name="" id="" class="btn btn-dark" href="<?php echo $ruta_base ?>autores.php" role="button">Ver Autores</a> 
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="img/img3.jpeg" height="250" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Solicitud de Libros</h5>
        <p class="card-text">Mira nuestros ultimos pedidos.</p>
        <a name="" id="" class="btn btn-dark" href="<?php echo $ruta_base ?>solicitud.php" role="button"> Ver Solicitudes</a> 
      </div>
    </div>
  </div>
</div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include("templates/footer.php"); ?>