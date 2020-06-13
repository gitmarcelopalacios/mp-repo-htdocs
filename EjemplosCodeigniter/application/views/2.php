		<div class="container">
			<h3 class="pt-3 text-primary">Consulta estándar con resultados múltiples (versión array)</h3>
		</div>

	
	<main class="container">
		<table class="table table-bordered">
		
			<thead class="thead-light">
				<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Email</th>
				</tr>
			</thead>
			<tbody>
		
			<?php 
			$consulta = $this->db->query('SELECT nombre, apellidos, email FROM mi_tabla');
			
			foreach ($consulta->result_array() as $fila)
			{
				echo "<tr>";	
				echo "   <td>".$fila['nombre']."</td>";	
				echo "   <td>".$fila['apellidos']."</td>";	
				echo "   <td>".$fila['email']."</td>";	
				echo "</tr>";	
			}
			?>
		</tbody>
		</table>
	</main>


   
      
      
