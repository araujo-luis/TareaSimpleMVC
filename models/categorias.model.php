<?php
require_once("libs/dao.php");
function obtenerCategorias(){
  $arregloCategorias = array();
  $query= "SELECT * FROM categorias;";
  $arregloCategorias= obtenerRegistros($query);

  return $arregloCategorias;
}
 ?>
