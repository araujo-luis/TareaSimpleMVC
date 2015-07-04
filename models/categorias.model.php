<?php
require_once("libs/dao.php");
function obtenerCategorias(){
  $arregloCategorias = array();
  $query= "SELECT * FROM categorias;";
  $arregloCategorias= obtenerRegistros($query);

  return $arregloCategorias;
}

function ingresarCategoria($ctgdsc,$ctgest){
  $query="INSERT INTO categorias (`ctgcod`, `ctgdsc`, `ctgest`) VALUES (NULL,'$ctgdsc','$ctgest'  );";

  return ejecutarNonQuery($query);
}

 ?>
