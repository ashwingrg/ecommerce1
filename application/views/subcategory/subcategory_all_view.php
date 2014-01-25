<style>a:hover{text-decoration: none;}</style>
<div id="content">		
	<div id="contentHeader">
		<h1>Sub Category</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">	
		<div class="grid-24">							
		<?php 
		if($this->session->flashdata('scatadd')){
		?>
			<div class="notify notify-success" style="width: 50%;">		
				<a href="javascript:;" class="close">×</a>			
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('scatadd')  ?></p>
			</div>
		<?php
		}
		?>
		<?php 
		if($this->session->flashdata('scatup')){
		?>
			<div class="notify notify-success" style="width: 50%;">	
				<a href="javascript:;" class="close">×</a>	
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('scatup')  ?></p>
			</div>
		<?php
		}
		 ?>
		<?php 
		if($this->session->flashdata('scatdel')){
		?>
			<div class="notify notify-success" style="width: 50%;">			
				<a href="javascript:;" class="close">×</a>	
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('scatdel')  ?></p>
			</div>
		<?php
		}
		?>
		<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/subcategory/addsubcategory'); ?>'" style="float:right; margin: -7px 0 5px 0;"><a>New Sub Catgeory</a></button>
		<div class="widget widget-table">	
			<div class="widget-header">
				<span class="icon-list"></span>
				<h3 class="icon chart">List All Sub Categories</h3>		
			</div>	
			<div class="widget-content">			
				<table class="table table-bordered table-striped data-table">
					<thead>
						<tr>
							<th>Sub Category Name</th>
							<th>Sub Category Description</th>
							<th>Sub Category Image Thumb</th>	
							<th width="14%">Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($all_subcategory as $rs): ?>
						<tr class="gradeA">
							<td><?php echo $rs->subcategory_name; ?></td>
							<td><?php echo $rs->subcategory_description; ?></td>
							<td></td>
							<td >
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/subcategory/addsubcategory')."/";?><?php echo $rs->subcategory_id; ?>'" ><span class=""></span> <a>Edit</a></button>
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/subcategory/delete')."/";?><?php echo $rs->subcategory_id; ?>';"><span class=""></span><a>Delete</a></button>
							</td>
						</tr>
					<?php endforeach; ?>							
					</tbody>
				</table>
			</div> <!-- .widget-content -->	
		</div> <!-- .widget -->	
		</div> <!-- .grid -->
	</div> <!-- .container -->
</div> <!-- #content -->
	