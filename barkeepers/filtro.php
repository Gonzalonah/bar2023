<?php
  include "Autenticacion.php";
    
if (isset($_POST['consulta'])){
//    $q="j";
 $q = $conn -> real_escape_string($_POST ['consulta']);
    $query = "SELECT ing, vol FROM ingrediente WHERE ing LIKE '%".$q."%'";
    echo $q;    
}

$resultado = $conn -> query ($query);

if($resultado -> num_rows > 0){
    $salida.= "<table><thead><tr><td>Ingrediente</td><td>Vol</td><td><i class='fas fa-plus'></i></td></tr></thead><tbody> ";
    while($fila=$resultado->fetch_assoc()){
        $salida.="<tr>
        <td>".$fila['ing']."</td>
        <td>".$fila['vol']."</td>
        <td><i class='fas fa-plus' name='btn' value='".$fila['ing']."'></i></td>
        </tr>";
    }
    $salida.="</tbody></table>";
}else{
    $salida.="<table><thead><tr><td>Ingrediente</td><td>Vol</td><td><i class='fas fa-plus'></i></td></tr></thead></table>";
}
echo $salida;

//------
/*if (isset($_POST['trago'])){
//    $q="j";
 $q = $conn -> real_escape_string($_POST ['trago']);
    $quer = "SELECT * FROM tragos WHERE ingre LIKE '%".$trago."%'";
    echo $q;    
}

$resul = $conn -> query ($quer);

if($resul -> num_rows > 0){
  $sal.="<<div class='w3-card-4'><h2>".$resul['nombre']."</h2>";
    while($fila=$resultado->fetch_assoc()){
        $sal.="<div class='w3-container w3-center'><p>".$$resul['ingre']."</p>";
    }
    $sal.="</div></div>";
}else{
    $sal.="<div class='w3-card-4'><div class='w3-container w3-center'><p>No sxiste</p></div></div>";
}
echo $sal;*/

$conn->close();
?>