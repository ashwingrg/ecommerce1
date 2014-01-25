<div id="content">		
	<div id="contentHeader">
		<h1>Sub Category</h1>
	</div> <!-- #contentHeader -->		
	<div class="container">	
		<div class="grid-15">												
			<button class="btn btn-primary" style="float: right;margin-bottom:7px" onclick="window.location.href='<?php echo site_url('subcategory'); ?>'"><span class=""></span>
				<a href="<?php echo site_url('admin/subcategory'); ?>">List Sub Category</a></button>
				<div class="widget">		
					<div class="widget-header">
						<span class="icon-article"></span>
						<h3>
						<?php if (@$scdatas){
								echo "Edit Sub Category";
							}
							else {
								echo "New Sub Category";
							}
						?>
						</h3>
					</div> <!-- .widget-header -->	
					<div class="widget-content">	
						<form class="form uniformForm validateForm" method="post" action="<?php echo current_url(); ?>">		
							<div class="field-group">
								<label for="required">Name:</label>
								<div class="field">
									<input type="text" name="scname"  value="<?php echo @$scdatas['subcategory_name'];?>"id="required" size="20" class="validate[required]">	
								</div>
							</div> <!-- .field-group -->	
							<div class="field-group">		
								<label for="message">Description:</label>
								<div class="field">
									<textarea name="scdescription" id="msg" rows="5" cols="50"><?php echo @$scdatas['subcategory_description']; ?></textarea>
								</div>
							</div>	
							<div class="field-group">		
								<label>Choose Category:</label>			
								<div class="field">
									<select name="sctype" id="cardtype" style="cursor:pointer;">
									<?php foreach($all_category as $ac): ?>
										<option value="<?php echo $ac->category_id; ?>"><?php echo $ac->category_name; ?></option>
									<?php endforeach; ?>	
									</select>
								</div>		
							</div>
							<div class="actions">						
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="button" onclick="window.location.href='<?php echo site_url('admin/subcategory') ?>'" class="btn btn-success">Cancel</button>
							</div> <!-- .actions -->	
						</form>	
					</div> <!-- .widget-content -->	
				</div>	
		</div> <!-- .grid -->	
	</div> <!-- .container -->	
</div> <!-- #content -->
<script>
	CKEDITOR.replace('msg');
</script>