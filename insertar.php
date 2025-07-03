<?php
$NumeroPedido = $_GET["NumeroPedido"];
$nombre = $_GET["Nombre"];
$tipopas = $_GET["TipoPastel"];
$tamaño= $_GET["Tamaño"];
$Num= $_GET["numerodetelefono"];
$Fch = $_GET["FechaDeEntrega"];
$Dirc = $_GET["Direccion"];

$conexion = new mysqli("localhost", "root", "", "pedido");

if ($conexion->connect_errno) {
  echo "Fallo la conexión".$conexion->connect_errno;
}  
  $conexion->set_charset("utf8");

  $consulta = "INSERT INTO pedido(NumeroPedido,Nombre,TipoPastel,Tamaño,numerodetelefono,FechaDeEntrega,
  Direccion)  VALUES('$NumeroPedido','$nombre','$tipopas','$tamaño','$Num','$Fch','$Dirc')";
  
  $resultados = mysqli_query($conexion, $consulta);
  if($resultados=false){
    echo "error en la consulta";
  }else
  {
    echo "registro guardado<br><br>";
    
    echo"<table><tr> <td> $NumeroPedido<td><tr>";
    echo"<table><tr> <td> $nombre <td><tr>";
    echo"<table><tr> <td> $tipopas <td><tr>";
    echo"<table><tr> <td> $tamaño <td><tr>";
    echo"<table><tr> <td> $Num <td><tr>";
    echo"<table><tr> <td> $Fch <td><tr>";
    echo"<table><tr> <td> $Dirc <td><tr>";
  }
  
  $conexion->close();

?>

