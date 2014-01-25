	<div id="sidebar">		
		
		<ul id="mainNav">			
			<li id="navDashboard" class="nav">
				<span class="icon-home"></span>
				<a href="<?php echo site_url('admin/home')?>">Dashboard</a>				
			</li>
			<li id="navPages" class="nav">
				<span class="icon-book-alt"></span>
				<a href="javascript:;">Category</a>				
				
				<ul class="subNav">
					<li><a href="<?php echo site_url('admin/category/addcategory'); ?>">New Category</a></li>
					<li><a href="<?php echo site_url('admin/category'); ?>">List Category</a></li>
				</ul>
			</li>
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="javascript:;">Sub Category</a>				
				
				<ul class="subNav">
					<li><a href="<?php echo site_url('admin/subcategory/addsubcategory'); ?>">New Sub Category</a></li>
					<li><a href="<?php echo site_url('admin/subcategory'); ?>">List Sub Category</a></li>				
				</ul>
			</li>
			<li id="navPages" class="nav">
				<span class="icon-folder-stroke"></span>
				<a href="javascript:;">Products</a>				
				
				<ul class="subNav">
					<li><a href="<?php echo site_url('admin/product/addproduct'); ?>">New Product</a></li>
					<li><a href="<?php echo site_url('admin/product'); ?>">List Products</a></li>				
				</ul>
			</li>
			<li id="navPages" class="nav">
				<span class="icon-folder-stroke"></span>
				<a href="javascript:;">Pages</a>				
				
				<ul class="subNav">
					<li><a href="<?php echo site_url('admin/pages/addpage'); ?>">New Page</a></li>
					<li><a href="<?php echo site_url('admin/pages'); ?>">List Pages</a></li>				
				</ul>
			</li>
		</ul>
				
	</div> <!-- #sidebar -->