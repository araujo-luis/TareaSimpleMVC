<form action="index.php?page=categorias" method="post">
  <label for="txtCtgDsc">Descripcion</label>
  <input type="text" name="txtCtgDsc" id="txtCtgDsc" placeholder="Descripcion Categoria"/>

  <select name="cmbCtgEst">
    <option value="ACT" selected>Activo</option>
    <option value="INA">Inactivo</option>
  </select>

  <input type="submit" name="btnIngresar" value="Ingresar">
  <input type="submit" name="btnActualizar" value="Actualizar">
  <input type="submit" name="btnEliminar" value="Eliminar">

</form>
