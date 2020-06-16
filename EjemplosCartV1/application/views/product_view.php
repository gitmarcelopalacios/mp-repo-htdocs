<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
</head>

<body>
	<div class="container">
		<br/>
		
		<div align="left">
			<img height="120"  src="<?php echo base_url().'assets/images/hombrecitoenbicicleta.PNG';?>"> 
			<h1 style="color:brown">La Verdurita Veloz</h1>
			<h3>Verdulería Virtual 2020</h4>
		</div>
		<hr/>

		<div class="row">
			<div class="col-md-8">
				<div class="row">
				<?php foreach ($data->result() as $row) : ?>
					<div class="col-md-6">
						<div class="thumbnail" align="center">
							<img height="250"  src="<?php echo base_url().'assets/images/'.$row->product_image;?>">
							<div class="caption">
								<p></p>
								<h4 style="color:green"><b><?php echo $row->product_name;?></b></h4>
								<div class="row">
									<div class="col-md-8">
										<h2 style="color:red"><b>$ <?php echo number_format($row->product_price,2);?></b></h2>
									</div>
									<div class="col-md-4">
										<p>
											<input type="number" name="quantity" id="<?php echo $row->product_id;?>" value="1" min="0" class="quantity form-control">
										</p>
									</div>
								</div>
								<!-- <br> -->
								<button class="add_cart btn btn-danger btn-block" data-productid="<?php echo $row->product_id;?>" data-productname="<?php echo $row->product_name;?>" data-productprice="<?php echo $row->product_price;?>">Agregar al  <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
								<br>
							</div>
						</div>
					</div>
				<?php endforeach;?>
					
				</div>

			</div>
			<div class="col-md-4">

				<h2 style="color:brown"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Tus Compras</h2>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cant.</th>
							<th>Importe</th>
							<th></th>
						</tr>
					</thead>
					<tbody id="detail_cart">

					</tbody>
					
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	
	<script type="text/javascript">
	
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var product_id    = $(this).data("productid");
			var product_name  = $(this).data("productname");
			var product_price = $(this).data("productprice");
			var quantity   	  = $('#' + product_id).val();
			$.ajax({
				url : "<?php echo site_url('product/add_to_cart');?>",
				method : "POST",
				data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		
		$('#detail_cart').load("<?php echo site_url('product/load_cart');?>");

		
		$(document).on('click','.romove_cart',function(){
			var row_id=$(this).attr("id"); 
			$.ajax({
				url : "<?php echo site_url('product/delete_cart');?>",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});

</script>
</body>
</html>