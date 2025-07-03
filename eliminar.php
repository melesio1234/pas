<?php
$NumeP=$_GET["NumeroPedido"];

$conexion=new mysqli("localhost", "root", "", "pedido");

if ($conexion->connect_errno) {
  echo "Fallo la conexión";
} else {
  $conexion->set_charset("utf8");
  $consulta="DELETE FROM pedido WHERE(NumeroPedido=$NumeP)";
  $resultados = mysqli_query($conexion, $consulta);
  echo $resultados ? "Pedido eliminado correctamente." : "Error al eliminar pedido.";
  $conexion->close();
}
?>