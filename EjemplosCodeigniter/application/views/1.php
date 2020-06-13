
	<div class="container">
		<h3 class="pt-4 text-primary">Consulta estándar con resultados múltiples (versión objeto)</h3>
	</div>
	
	
	<main class="container">
		<table class="table">
		
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
			

			
			echo "<p></p>";

			foreach ($consulta->result() as $fila)
			{
				echo "<tr>";	
				echo "   <td>".$fila->nombre."</td>";	
				echo "   <td>".$fila->apellidos."</td>";	
				echo "   <td>".$fila->email."</td>";	
				echo "</tr>";	
			}
			?>
			
			
			
		</tbody>
		
			
		</table>

		<div class='card'>
			<div class='card-body'>
				<p>Se han obtenido <?php echo $consulta->num_rows() ?> fila(s)."<p/>
			</div>
		</div>

	</main>


   
      
      
