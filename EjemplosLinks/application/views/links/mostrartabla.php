  <br>
  <table class="table table-hover" >
    <tr>
      <th style="text-align: center;">ID</th>
      <th>Categoría</th>
      <th>Link</th>
      <th>
      </th>
    </tr>
    <?php
      if($RSlinks){
        foreach ($RSlinks as $RSrow) {
          echo "<tr>";
          echo "<td align=center>".$RSrow->id."</td>";
          echo "<td>".$RSrow->categorias."</td>";
          echo "<td><a target='_blank' href='".$RSrow->link."'>".$RSrow->titulo."</a></td>";
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


    