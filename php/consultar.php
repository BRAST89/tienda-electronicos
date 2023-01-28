 <!DOCTYPE html>
<html lang="es">
<head>
  <title>Consultar</title>
    <title>Consultar</title>
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

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Datos</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "codigop: " . $row["codigop"]
        . "<br> nombrep: " . $row["nombrep"]
        . "<br> marcap: " . $row["marcap"]
        . "<br> preciop: ". $row["preciop"]
        . "<br> cantidadp: " . $row["cantidadp"]
        . "". "<br>";
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php


        
//$myJSON = json_encode($row);

//echo $myJSON;

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
        echo "Ese producto no existe " . "<br>";
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