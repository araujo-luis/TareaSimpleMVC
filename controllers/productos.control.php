<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  //Agregar requires de modelos aqui
  //ej require_once("models/tabla.model.php")



  //========================



  function run(){
    //Agregar codigo aqui
    $productos = array();
    $productos[] = array(
      "prdcod" => 1,
      "prddsc"=> "Producto 1",
      "ctgcod"=> 1,
      "prdprc"=>400,
      "prdstk"=>3,
      "prdest"=>"ACT"
    );
    $productos[] = array(
      "prdcod" => 2,
      "prddsc"=> "Producto 2",
      "ctgcod"=> 1,
      "prdprc"=>400,
      "prdstk"=>3,
      "prdest"=>"ACT"
    );
    $productos[] = array(
      "prdcod" => 3,
      "prddsc"=> "Producto 3",
      "ctgcod"=> 1,
      "prdprc"=>400,
      "prdstk"=>3,
      "prdest"=>"ACT"
    );
    //---------------
    renderizar("productos",array("productos"=>$productos));


  }


  run();
?>
