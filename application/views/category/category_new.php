<div id="content">		
	<div id="contentHeader">
		<h1>Category</h1>
	</div> <!-- #contentHeader -->		
	<div class="container">	
		<div class="grid-15">												
			<button class="btn btn-primary" style="float: right;margin-bottom:10px" onclick="window.location.href='<?php echo site_url('admin/category'); ?>'"><span class=""></span>
				<a>List Catgeory</a></button>
				<div class="widget">		
					<div class="widget-header">
						<span class="icon-article"></span>
						<h3>
						<?php 
							if (@$datas){
								echo "Edit Category";
							}
							else{
								echo "New Category";
							}
						 ?>
						</h3>
					</div> <!-- .widget-header -->	
					<div class="widget-content">	
						<form class="form uniformForm validateForm" method="post" action="<?php echo current_url(); ?>">		
							<div class="field-group">
								<label for="required">Name:</label>
								<div class="field">
									<input type="text" name="cname"  value="<?php echo @$datas['category_name']?>"id="required" size="20" class="validate[required]">	
								</div>
							</div> <!-- .field-group -->	
							<div class="field-group">		
								<label for="message">Description:</label>
								<div class="field">
									<textarea name="cdescription" id="message" rows="5" cols="50"><?php echo @ $datas['category_description']; ?></textarea>
								</div>
							</div>	
							<div class="actions">						
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="button" onclick="window.location.href='<?php echo site_url('admin/category') ?>'" class="btn btn-success">Cancel</button>
							</div> <!-- .actions -->	
						</form>	
					</div> <!-- .widget-content -->	
				</div>	
		</div> <!-- .grid -->	
	</div> <!-- .container -->	
</div> <!-- #content -->
<script>
	CKEDITOR.replace('message');
</script>