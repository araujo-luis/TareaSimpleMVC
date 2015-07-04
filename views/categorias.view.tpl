<h2>Listado de Categorias</h2>
<a href="">Agregar Categoria</a>
<table style="margin:2em; width:90%;">
  <tr>
    <th>
      Cod.
    </th>

    <th>
      Categoria
    </th>

    <th>
      Estado
    </th>
    <th>

    </th>
  </tr>
  {{foreach categorias}}
  <tr>
    <td>
      {{ctgcod}}
    </td>
    <td>

      {{ctgdsc}}
    </td>
    <td>
      {{ctgest}}
    </td>
    <td>
      <a href="">Actualizar</a> |
      <a href="">Eliminar</a>

    </td>
  </tr>
  {{endfor categorias}}
</table>
