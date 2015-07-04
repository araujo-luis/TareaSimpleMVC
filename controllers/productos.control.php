<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  //Agregar requires de modelos aqui
  //ej require_once("models/tabla.model.php")
require_once("models/productos.model.php");


  //========================



  function run(){
    //Agregar codigo aqui
    $productos = array();

    if(isset($_POST["btnIngresar"])){
      $prddsc = $_POST["txtPrdDsc"];
      $ctgcod = $_POST["txtCtgCod"];
      $prdprc = $_POST["txtPrdPrc"];
      $prdstk = $_POST["txtPrdStk"];
      $prdest = $_POST["cmbPrdEst"];

      ingresarProducto($prddsc,
                        $ctgcod,
                        $prdprc,
                        $prdstk,
                        $prdest);

    }elseif (isset($_POST["btnActualizar"])) {
      $prddsc = $_POST["txtPrdDsc"];
      $ctgcod = $_POST["txtCtgCod"];
      $prdprc = $_POST["txtPrdPrc"];
      $prdstk = $_POST["txtPrdStk"];
      $prdest = $_POST["cmbPrdEst"];

      $prdcod = $_GET["cod"];
      actualizarProducto($prdcod,$prddsc,
                          $ctgcod,
                            $prdstk,
                            $prdprc,
                          $prdest );
    }elseif (isset($_POST["btnEliminar"])) {

      $prdcod = $_GET["cod"];
      eliminarProducto($prdcod);
    }

    if(isset($_GET["modo"])){

      $modo= $_GET["modo"];

      switch($modo){
          case 'ACT':
            $producto = obtenerProducto($_GET["cod"]);
            ECHO $producto["prddsc"];
            $datos = array(
              "actualizar"=> 'ACT',
              "prdcod" =>$producto["prdcod"],
              "prddsc" =>$producto["prddsc"],
              "ctgcod" =>$producto["ctgcod"],
              "prdstk" =>$producto["prdstk"],
              "prdprc" =>$producto["prdprc"],
              "prdest" => ($producto["prdest"] == "INA")? "ACT": NULL
              );

            break;

          case 'INS':

          $datos = array(
            "ingresar"=> 'INS'
            );
            break;

          case 'ELI':
          $producto = obtenerProducto($_GET["cod"]);
          $datos = array(
            "eliminar"=> 'ELI',
            "prdcod" =>$producto["prdcod"],
            "prddsc" =>$producto["prddsc"],
            "ctgcod" =>$producto["ctgcod"],
            "prdstk" =>$producto["prdstk"],
            "prdprc" =>$producto["prdprc"],
            "prdest" => ($producto["prdest"] == "INA")? "ACT": NULL
            );
          break;
      }
      renderizar("formularioProductos",$datos);

    }else {
      $productos = obtenerProductos();
      renderizar("productos",array("productos"=>$productos));
    }

  }


  run();
?>
