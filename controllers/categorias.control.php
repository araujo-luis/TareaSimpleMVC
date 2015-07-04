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


    //---------------
    $ctgdsc = $_POST["txtCtgDsc"];
    $ctgest = $_POST["cmbCtgEst"];

    if(isset($_POST["btnIngresar"])){
      ingresarCategoria($ctgdsc,$ctgest);
    }elseif (isset($_POST["btnActualizar"]) {
      actualizarCategoria($ctgcod,$ctgdsc,$ctgest);      
    }

    if(isset($_GET["modo"])){

      renderizar("formularioCategorias",array());

    }else {
      $categorias = obtenerCategorias();
      renderizar("categorias",array("categorias"=>$categorias));
    }

                                //areglo de arreglos

    //debe existir un archivo en vistas

  }


  run();
?>
