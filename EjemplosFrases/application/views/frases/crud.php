  <br>
  <table class="table table-hover" >
    <tr>
      <th style="text-align: center;">ID</th>
      <th>Frase</th>
      <th>Autor</th>
      <th></th>
      <th>
      </th>
    </tr>
    <?php
      if($RSfrases){
        foreach ($RSfrases as $RSrow) {
          echo "<tr>";
          echo "<td align=center>".$RSrow->id."</td>";
          echo "<td>".$RSrow->frase."</td>";
          echo "<td>".$RSrow->autor."</td>";
          echo "<td>".$RSrow->valoracion."</td>";
          echo "<td align=right>";
          echo "<a class='btn btn-outline-success' href='qualify/".$RSrow->id."' title='Valorizar.'><i class='fa fa-star'></i></a> ";
          echo "<a class='btn btn-outline-warning' href='edit/".$RSrow->id."' title='Editar.'><i class='fa fa-pencil-square-o'></i></a> ";
          echo "<a class='btn btn-outline-danger' href='delete/".$RSrow->id."' title='Eliminar.'><i class='fa fa-trash-o'></i></a>"; 
          echo "</td>";
          echo "</tr>";
        }
      }else{
      }
      ?>
    </table>


    