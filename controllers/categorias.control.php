<?php
/* Listado de categorias Controller
 * Fecha 2015-07-01
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  //Agregar requires de modelos aqui
  //ej require_once("models/tabla.model.php")
  require_once("models/categorias.model.php");


  //========================



  function run(){
    //Agregar codigo aqui
    $categorias= array();
    $categorias = obtenerCategorias();

    //---------------

                                //areglo de arreglos
    renderizar("categorias",array("categorias"=>$categorias));
    //debe existir un archivo en vistas

  }


  run();
?>
