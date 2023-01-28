 <!DOCTYPE html>
<html lang="es">
<head>
  <title>Actualizar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>

 <?php

require('config.php');

$i = $_POST['codigop'];


$sql = "SELECT * FROM productos WHERE codigop=$i";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      ?>

      <div class="container">
  <h2>Actualización de prodcutos</h2>
  <form action="actualizar2.php" method="POST">
    <div class="form-group">
      <label>codigo producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['codigop'] ?> " ip="codigop" placeholder="Ingrese aquí el codigo del producto" name="codigop" readonly>
    </div>
    <div class="form-group">
      <label>Nombre producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['nombrep'] ?> " ip="nombrep" placeholder="Ingrese aquí el nombre del producto" name="nombrep">
    </div>
    <div class="form-group">
      <label>Marca producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['marcap'] ?> " ip="marcap" placeholder="Ingrese aquí la marca del producto" name="marcap">
    </div>
    <div class="form-group">
      <label>Precio producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['preciop'] ?> " ip="preciop" placeholder="Ingrese aquí el precio" name="preciop">
    </div>
    <div class="form-group">
      <label>Cantidad producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['cantidadp'] ?> " ip="cantidadp" placeholder="Ingrese aquí la cantidad" name="cantidadp">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
</div>

  <?php

    }


} else {



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "Esa producto no existe " . "<br>";
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php


}

mysqli_close($conn);
?> 