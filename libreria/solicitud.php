
<?php 
include("bd.php");
include("templates/header.php"); 

$sentencia=$conexion->prepare("SELECT * FROM contacto");
$sentencia->execute();
$lista_de_contactos=$sentencia->fetchAll((PDO::FETCH_ASSOC));

?> 
  <br>  
  <div class="container">
      <div class="center">
          <div class="card">
            <div class="card-body">
              <h1>SOLICITUDES DE CONTACTOS</h1>
            </div>
          </div>    
          <br>
          
  <div class="card">
    <div class="card-header">         
    </div>
    <div class="card-body">
    <div class="table-responsive-sm">
       <table class="table" id="tabla_id">
          <thead>
             <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha</th>
                <th scope="col">Correo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Asunto</th>
                <th scope="col">Comentario</th>
             </tr>
          </thead>
          <tbody>
       <?php foreach ($lista_de_contactos as $registro) { ?>

             <tr class="">
                <td scope="row"><?php echo $registro['id']?></td>
                <td scope="row"><?php echo $registro['fecha']?></td>
                <td scope="row"><?php echo $registro['correo']?></td>
                <td scope="row"><?php echo $registro['nombre']?></td>
                <td scope="row"><?php echo $registro['asunto']?></td>
                <td scope="row"><?php echo $registro['comentario']?></td>
             </tr>
       <?php } ?>
          </tbody>
       </table>
    </div>
    
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
      <br>
    </div>
</div>
<br>
<?php include("templates/footer.php"); ?>