
<?php 
include("bd.php");
include("templates/header.php");

$sentencia=$conexion->prepare("SELECT * FROM tbl_libros");
$sentencia->execute();
$lista_de_libros=$sentencia->fetchAll((PDO::FETCH_ASSOC));

?> 
  <br>  
  <div class="container">
      <div class="center">
          <div class="card">
            <div class="card-body">
              <h1>LIBROS</h1>
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
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Año</th>
                <th scope="col">Genero</th>
             </tr>
          </thead>
          <tbody>
       <?php foreach ($lista_de_libros as $registro) { ?>

             <tr class="">
                <td scope="row"><?php echo $registro['id']?></td>
                <td scope="row"><?php echo $registro['titulo']?></td>
                <td scope="row"><?php echo $registro['autor']?></td>
                <td scope="row"><?php echo $registro['anio']?></td>
                <td scope="row"><?php echo $registro['genero']?></td>
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
        <img src="img/banner.png" style="border-radius: 35px;" alt="..."> 
      <br>
    </div>
</div>
<br>
<?php include("templates/footer.php"); ?>