<div id="content">		
	<div id="contentHeader">
		<h1>Product</h1>
	</div> <!-- #contentHeader -->		
	<div class="container">	
		<div class="grid-15">												
			<button class="btn btn-primary" style="float: right;margin-bottom:7px" onclick="window.location.href='<?php echo site_url('admin/product'); ?>'"><span class=""></span>
				<a>List Products</a></button>
				<div class="widget">		
					<div class="widget-header">
						<span class="icon-article"></span>
						<h3>
						<?php 
						if(@ $prdatas){
							echo "Edit Product";
						}
						else{
							echo "New Product";
						}
						 ?>
						</h3>
					</div> <!-- .widget-header -->	

					<div class="widget-content">	
						<form class="form uniformForm validateForm" method="post" enctype="multipart/form-data"action="<?php echo current_url(); ?>">		
							<div class="field-group"><!--product name-->
								<label for="required">Name:</label>
								<div class="field">
									<input type="text" name="prname"  value="<?php echo @$prdatas['product_name'];?>"id="required" size="20" class="validate[required]" placeholder="Product Name">	
								</div>
							</div> <!-- product name -->	
							<div class="field-group"><!--product price-->
								<label for="required">Price:</label>
								<div class="field">
									<input type="text" name="prprice"  value="<?php echo @$prdatas['product_price'];?>"id="required" size="20" class="validate[required]" placeholder="Product Price">	
								</div>
							</div> <!-- product price -->	
							<div class="field-group"><!--product description-->
								<label for="message">Description:</label>
								<div class="field">
									<textarea name="prdescription" id="message" rows="5" cols="50" placeholder="Product Description..."><?php echo @ $prdatas['product_desc']; ?></textarea>
								</div>
							</div><!--product description-->
							<div class="field-group" style="float:left;">		
								<label>Choose Category:</label>			
								<div class="field">
									<select name="ctype" id="category" style="cursor:pointer;">
									<option value="">Please Select</option>
									<?php foreach($all_category as $ac): ?>
										<option value="<?php echo $ac->category_id; ?>" <?php if($ac->category_id==@$prdatas['category_id']){
											echo "selected=selected";
											} ?>><?php echo $ac->category_name; ?></option>
									<?php endforeach; ?>	
									</select>
								</div>	
							</div>

							<div class="field-group">		
								<label>Choose SubCategory:</label>			
								<div class="field">
									<select name="sctype" id="subcat">
										<option value="">Please Select</option>
										<?php foreach($all_subcategory as $ac): ?>
										<option value="<?php echo $ac->subcategory_id; ?>" <?php if($ac->subcategory_id==@$prdatas['subcategory_id']){
											echo "selected=selected";
											} ?>><?php echo $ac->subcategory_name; ?></option>
									<?php endforeach; ?>	
									</select>
								</div>		
							</div>
							<div class="field-group">		
								<label>Choose Image:</label>			
								<div class="field">
									<input type="file" name="product_image">
									<?php if($this->uri->segment(4)){
										?>
										<img src=" <?php echo base_url(); ?>uploads/<?php echo @$prdatas['product_thumb_image']; ?>" alt="" width="100" height="100">
										<?php
										} ?>
										<input type="hidden" name="image_old" value="<?php echo @ $prdatas['product_thumb_image']; ?>">
								</div>		
							</div>
							<div class="actions">						
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="button" onclick="window.location.href='<?php echo site_url('admin/product') ?>'" class="btn btn-success">Cancel</button>
							</div> <!-- .actions -->	
						</form>	
					</div> <!-- .widget-content -->	
				</div>	
		</div> <!-- .grid -->	
	</div> <!-- .container -->	
</div> <!-- #content -->

<script>
	$('#category').on('change',function(){
		var catid = $(this).val();
		var data='categoryid='+catid;
		var url = '<?php echo base_url()?>admin/product/ajaxfilter';
		$.post(url,data,function(res){
			$('#subcat').empty().html(res);
		});
	});

	CKEDITOR.replace('message');
</script>