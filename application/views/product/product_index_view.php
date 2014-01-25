<style>a:hover{text-decoration: none;}</style>
<div id="content">		
	<div id="contentHeader">
		<h1>Products</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">	
		<div class="grid-24">							
		<?php 
		if($this->session->flashdata('proadd')){
		?>
			<div class="notify notify-success" style="width: 50%;">		
				<a href="javascript:;" class="close">×</a>			
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('proadd')  ?></p>
			</div>
		<?php
		}
		?>
		<?php 
		if($this->session->flashdata('proup')){
		?>
			<div class="notify notify-success" style="width: 50%;">	
				<a href="javascript:;" class="close">×</a>	
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('proup')  ?></p>
			</div>
		<?php
		}
		 ?>
		<?php 
		if($this->session->flashdata('prodel')){
		?>
			<div class="notify notify-success" style="width: 50%;">			
				<a href="javascript:;" class="close">×</a>	
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('prodel')  ?></p>
			</div>
		<?php
		}
		?>
		<button class="btn btn-primary" onclick="window.location.href='product/addproduct'" style="float:right; margin: -7px 0 5px 0;"><a>New Product</a></button>
		<div class="widget widget-table">	
			<div class="widget-header">
				<span class="icon-list"></span>
				<a href="<?php echo site_url('admin/product'); ?>"><h3 class="icon chart">List All Products</h3></a>
			</div>	
			<div class="widget-content">			
				<table class="table table-bordered table-striped data-table">
					<thead>
						<tr>
							<th>Product Name</th>
							<th style="width:15%">Product Price</th>
							<th>Thumb</th>
							<th>Product Description</th>
							<th width="14%">Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach(@$all_products as $ac){ ?>
						<tr class="gradeA">
							<td><?php echo $ac->product_name; ?></td>
							<td><?php echo $ac->product_price; ?></td>
							<td> <img src=" <?php echo base_url(); ?>uploads/<?php echo $ac->product_thumb_image; ?>" alt="" width="100" height="100"></td>
							<td><?php echo $ac->product_desc; ?></td>
							<td >
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/product/addproduct')."/";?><?php echo $ac->product_id; ?>'"><span class=""></span><a>Edit</a></button>
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/product/delete')."/";?><?php echo $ac->product_id; ?>';"><span class=""></span><a>Delete</a></button>
							</td>
						</tr>
					<?php } ?>														
					</tbody>
				</table>
			</div> <!-- .widget-content -->	
		</div> <!-- .widget -->	
		</div> <!-- .grid -->
	</div> <!-- .container -->
</div> <!-- #content -->
	