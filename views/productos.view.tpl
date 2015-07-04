<h2>Listado de Productos</h2>
<a href="index.php?page=productos&modo=INS">Agregar Productos</a>
<table style="margin:2em; width:90%;">
  <tr>
    <th>
      Cod.
    </th>

    <th>
      Producto
    </th>

    <th>
      Codigo Categoria
    </th>

    <th>
      Precio
    </th>

    <th>
      Stock
    </th>

    <th>
      Estado
    </th>
    <th>

    </th>
  </tr>
  {{foreach productos}}
  <tr>
    <td>
      {{prdcod}}
    </td>
    <td>

      {{prddsc}}
    </td>
    <td>
      {{ctgcod}}
    </td>

    <td>
      {{prdprc}}
    </td>

    <td>
      {{prdstk}}
    </td>
    <td>
      {{prdest}}
    </td>
    <td>
      <a href="index.php?page=productos&modo=ACT&cod={{prdcod}}">Actualizar</a> |
      <a href="index.php?page=productos&modo=ELI&cod={{prdcod}}">Eliminar</a>

    </td>
  </tr>
  {{endfor productos}}
</table>
