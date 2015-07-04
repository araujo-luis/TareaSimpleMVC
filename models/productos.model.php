<?php
require_once("libs/dao.php");
function obtenerProductos(){
  $arregloCategorias = array();
  $query= "SELECT * FROM productos;";
  $arregloCategorias= obtenerRegistros($query);

  return $arregloCategorias;
}

function ingresarProducto($prddsc,$ctgcod,$prdprc,$prdstk,$prdest){
  $query="INSERT INTO `nw201502`.`productos` (`prdcod`, `prddsc`, `ctgcod`, `prdprc`, `prdstk`, `prdest`, `prdimguri`) VALUES (NULL, '$prddsc','$ctgcod','$prdprc','$prdstk','$prdest', '');";
  ECHO "INSERTAR";
  return ejecutarNonQuery($query);
}

function eliminarProducto($prdcod){
  $query="DELETE FROM productos  WHERE `productos`.`prdcod` = $prdcod;";

  return ejecutarNonQuery($query);
}

function actualizarProducto($prdcod,$prddsc,$ctgcod,$prdprc,$prdstk,$prdest){

  $query = "UPDATE `productos` SET `prddsc` = '$prddsc', `ctgcod` =$ctgcod,`prdprc` = '$prdprc', `prdstk` = '$prdstk', `prdest` = '$prdest' WHERE `productos`.`prdcod` = 8;";

  return ejecutarNonQuery($query);
}

function obtenerProducto($prdcod){
  $query = "SELECT * FROM productos WHERE prdcod='$prdcod';";
  return obtenerUnRegistro($query);
}

 ?>
