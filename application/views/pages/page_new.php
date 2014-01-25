
<div id="content">		
	<div id="contentHeader">
		<h1>Pages</h1>
	</div> <!-- #contentHeader -->		
	<div class="container">	
		<div class="grid-15">												
			<button class="btn btn-primary" style="float: right;margin-bottom:7px" onclick="window.location.href='<?php echo site_url('admin/pages'); ?>'"><span class=""></span>
				<a>List Pages</a></button>
				<div class="widget">		
					<div class="widget-header">
						<span class="icon-article"></span>
						<h3>
						<?php 
						if(@ $data){
							echo "Edit Page";
						}
						else{
							echo "New Page";
						}
						 ?>
						</h3>
					</div> <!-- .widget-header -->	

					<div class="widget-content">	
						<form class="form uniformForm validateForm" method="post" action="<?php echo current_url(); ?>">		
							<div class="field-group"><!--product name-->
								<label for="required">Name:</label>
								<div class="field">
									<input type="text" name="pagename"  value="<?php echo @ $pgdata->page_name; ?>" id="required" size="20" class="validate[required]" placeholder="Page Name">	
								</div>
							</div> <!-- product name -->	
							<div class="field-group"><!--product name-->
								<label for="required">Link:</label>
								<div class="field">
									<input type="text" name="pagelink"  value="<?php echo @$pgdata->page_link; ?>"id="required" size="20" class="validate[required]" placeholder="Page Link">	
								</div>
							</div> <!-- product name -->
								
							<div class="field-group"><!--product description-->
								<label for="message">Description:</label>
								<div class="field">
									<textarea name="pgdescription" id="pgmessage" rows="5" cols="50" placeholder="Page Content/Description..."><?php echo @ $pgdata->page_desc; ?></textarea>
								</div>
							</div><!--product description-->
							
							<div class="actions">						
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="button" onclick="window.location.href='<?php echo site_url('admin/pages') ?>'" class="btn btn-success">Cancel</button>
							</div> <!-- .actions -->	
						</form>	
					</div> <!-- .widget-content -->	
				</div>	
		</div> <!-- .grid -->	
	</div> <!-- .container -->	
</div> <!-- #content -->

<script>
	CKEDITOR.replace('pgmessage');
</script>