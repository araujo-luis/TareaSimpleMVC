<form action="index.php?page=productos{{if prdcod}}&cod={{prdcod}} {{endif prdcod}}" method="post">
  <label for="txtPrdDsc">Descripcion</label>
  <input type="text" name="txtPrdDsc" id="txtPrdDsc" value="{{if prddsc}} {{prddsc}} {{endif prddsc}}" placeholder="Descripcion producto"/>

  <label for="txtCtgCod">Codigo Categoria</label>
  <input type="text" name="txtCtgCod" id="txtCtgCod" value="{{if ctgcod}} {{ctgcod}} {{endif ctgcod}}" placeholder="Codigo Categoria"/>


  <label for="txtPrdPrc">Precio</label>
  <input type="text" name="txtPrdPrc" id="txtPrdPrc" value="{{if prdprc}} {{prdprc}} {{endif prdprc}}" placeholder="Precio de producto"/>

  <label for="txtPrdStk">Stock</label>
  <input type="text" name="txtPrdStk" id="txtPrdStk" value="{{if prdstk}} {{prdstk}} {{endif prdstk}}" placeholder="Stock de producto"/>

<label for="cmbPrdEst">Estado</label>
  <select name="cmbPrdEst">
    <option value="ACT"  selected >Activo</option>
    <option value="INA" {{if prdest}} selected {{endif prdest}}>Inactivo</option>
  </select>



  {{if ingresar}}
  <input type="submit" name="btnIngresar" value="Ingresar">
  {{endif ingresar}}

  {{if actualizar}}
  <input type="submit" name="btnActualizar" value="Actualizar">
  {{endif actualizar}}

  {{if eliminar}}
  <input type="submit" name="btnEliminar" value="Eliminar">
  {{endif eliminar}}
</form>
