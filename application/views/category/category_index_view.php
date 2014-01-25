<style>a:hover{text-decoration: none;}</style>
<div id="content">		
	<div id="contentHeader">
		<h1>Category</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">	
		<div class="grid-24">							
		<?php 
		if($this->session->flashdata('catadd')){
		?>
			<div class="notify notify-success" style="width: 50%;">		
				<a href="javascript:;" class="close">×</a>			
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('catadd')  ?></p>
			</div>
		<?php
		}
		?>
		<?php 
		if($this->session->flashdata('catup')){
		?>
			<div class="notify notify-success" style="width: 50%;">	
				<a href="javascript:;" class="close">×</a>	
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('catup')  ?></p>
			</div>
		<?php
		}
		 ?>
		<?php 
		if($this->session->flashdata('catdel')){
		?>
			<div class="notify notify-success" style="width: 50%;">			
				<a href="javascript:;" class="close">×</a>	
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('catdel')  ?></p>
			</div>
		<?php
		}
		?>
		<button class="btn btn-primary" style="float:right; margin: -7px 0 5px 0;"><a href="<?php echo site_url('admin/category/addcategory'); ?>">New Catgeory</a></button>
		<div class="widget widget-table">	
			<div class="widget-header">
				<span class="icon-list"></span>
				<h3 class="icon chart">List All Categories</h3>		
			</div>	
			<div class="widget-content">			
				<table class="table table-bordered table-striped data-table">
					<thead>
						<tr>
							<th>Category Name</th>
							<th>Category Description</th>
							<th>Category Thumb</th>
							<th width="14%">Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($all_category as $ac){ ?>
						<tr class="gradeA">
							<td><?php echo $ac->category_name; ?></td>
							<td><?php echo $ac->category_description; ?></td>
							<td></td>
							<td >
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url()."admin/category/addcategory/"."$ac->category_id"; ?>'" ><span class=""></span> <a>Edit</a></button>
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/category/delete') ?><?php echo "/"."$ac->category_id"; ?>'"><span class=""></span><a>Delete</a></button>
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
	