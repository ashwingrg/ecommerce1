<style>a:hover{text-decoration: none;}</style>
<div id="content">		
	<div id="contentHeader">
		<h1>Pages</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">	
		<div class="grid-24">							
		<?php 
		if($this->session->flashdata('pageadd')){
		?>
			<div class="notify notify-success" style="width: 50%;">		
				<a href="javascript:;" class="close">×</a>			
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('pageadd')  ?></p>
			</div>
		<?php
		}
		?>
		<?php 
		if($this->session->flashdata('pageup')){
		?>
			<div class="notify notify-success" style="width: 50%;">	
				<a href="javascript:;" class="close">×</a>	
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('pageup')  ?></p>
			</div>
		<?php
		}
		 ?>
		<?php 
		if($this->session->flashdata('pagedel')){
		?>
			<div class="notify notify-success" style="width: 50%;">			
				<a href="javascript:;" class="close">×</a>	
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('pagedel')  ?></p>
			</div>
		<?php
		}
		?>
		<button class="btn btn-primary" onclick="window.location.href='pages/addpage'" style="float:right; margin: -7px 0 5px 0;"><a>New Page</a></button>
		<div class="widget widget-table">	
			<div class="widget-header">
				<span class="icon-list"></span>
				<a href="<?php echo site_url('admin/pages'); ?>"><h3 class="icon chart">List All Pages</h3></a>
			</div>	
			<div class="widget-content">			
				<table class="table table-bordered table-striped data-table">
					<thead>
						<tr>
							<th>Page Name</th>
							<th style="width:15%">Page Link</th>
							<th>Page Content/Descrition</th>
							<th width="14%">Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach(@$all_pages as $pd): ?>
						<tr class="gradeA">
							<td><?php echo $pd->page_name; ?></td>
							<td><?php echo $pd->page_link; ?></td>
							<td><?php echo $pd->page_desc; ?></td>
							<td >
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/pages/addpage')."/";?><?php echo $pd->page_id; ?>'"><span class=""></span><a>Edit</a></button>
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/pages/delete')."/";?><?php echo $pd->page_id; ?>';"><span class=""></span><a>Delete</a></button>
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
	