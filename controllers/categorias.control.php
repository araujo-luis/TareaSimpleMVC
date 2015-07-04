<?php
/* Listado de categorias Controller
 * Fecha 2015-07-01
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  //Agregar requires de modelos aqui
  //ej require_once("models/tabla.model.php")



  //========================



  function run(){
    //Agregar codigo aqui
    $categorias= array();
    $categorias[]= array(
      "ctgcod" =>1,
      "ctgdsc" => "Categoria",
      "ctgest"=> "ACT"
    );

    $categorias[]= array(
      "ctgcod" =>2,
      "ctgdsc" => "Categoria 2",
      "ctgest"=> "ACT"
    );

    $categorias[]= array(
      "ctgcod" =>3,
      "ctgdsc" => "Categoria 3",
      "ctgest"=> "ACT"
    );
    //---------------

                                //areglo de arreglos
    renderizar("categorias",array("categorias"=>$categorias));
    //debe existir un archivo en vistas

  }


  run();
?>
