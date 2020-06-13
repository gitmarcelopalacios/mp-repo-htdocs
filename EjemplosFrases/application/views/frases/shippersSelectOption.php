<?php	defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="ES">
<head><title><?php echo $pageTitle;?></title></head>
<body>
  <h3><?php echo $pageTitle;?></h3><hr>
  <a href="<?php echo base_url(); ?>" title="Ir a la página de inicio." >Inicio</a>
  <hr>
	<div>
			<label for="labelShipper">Seleccione el Shipper:</label>
			<select name="selectShipper" id="selectShipper">
					<?php foreach($shippersTableReceived as $table):?>
							<option value="<?php echo $table->Column1?>"><?php echo $table->Column2;?></option>
					<?php endforeach;?>
			</select>
	</div>
</body>
</html>
