 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad35";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE productos (
codigop INT(10) PRIMARY KEY,
nombrep VARCHAR(10),
marcap VARCHAR(10),
preciop VARCHAR(10),
cantidadp INT(10)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla productos creada satisfactoriamente";
} else {
    echo "Error creando tabla productos: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 