<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbprueba090922";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}

$sql = "SELECT Ci, Nombre, Apellido_Paterno
FROM  persona p
WHERE Nombre like '%m%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output para datos
    while ($row = $result->fetch_assoc()){
        //echo "<br> nombres: " .$row["nombres"];
        echo " <style>

.caja {
    box-shadow: 0 5px 5px 0 #AA332B;
    margin: 2%;
    float: left;
    width: 25%;
    border: none;
    font-family: cursive;
    font-size: medium;
}

.cabecera{
    border: 5px solid;
    border-style: double;
    border-color: #FA897B;
    text-align: center;
    font: oblique bold 100% cursive;
    background-color: #B2DFD8;
}

.cuerpo {
    font-size: large;
    font-family: 'Segoe UI';
    text-align: center;
    background-color: #f7bfd8;
}
</style>

<div class='caja'>
<div class='cabecera'>

    <h1>
        Ci: ".
        $row['Ci']."
    </h1>
        <div class='img'>
            <img src='IMG/usuario.png' alt='' width='20%'>
        </div>
</div>

<div class='cuerpo'>

    <h3>
        Nombre: ".
        $row['Nombre']."
    </h3>

    <h3>
        Apellido_Paterno: ".
        $row['Apellido_Paterno']."
    </h3>

</div>
</div> 
        ";
        
    }
}
else {
    echo "No hay resultados";
}
  $conn->close();
?>