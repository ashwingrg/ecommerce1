
 <!-- end of left content -->
    <div class="center_content">
      
      <div class="center_title_bar">All</div>
      <?php foreach($all_scat_products as $scp): ?>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#"><?php echo $scp->product_name; ?></a></div>
          <div class="product_img"><a href="#"><img src="<?php echo base_url(); ?>uploads/<?php echo $scp->product_thumb_image; ?>" alt="" border="0" width="60" height="100" /></a></div>
          <div class="prod_price"><span class="reduce"><?php echo $scp->product_price+500; ?>Nrs.</span> <span class="price"><?php echo $scp->product_price; ?>Nrs.</span></div>
        </div>
        <div class="prod_details_tab"> <a href="<?php echo site_url('home/cart/add'); ?>/<?php echo $scp->product_id; ?>" class="prod_buy">Add to Cart</a> <a href="<?php echo site_url('home/productdetails')."/".$scp->product_id; ?>" class="prod_details">Details</a> </div>
      </div>
    <?php endforeach; ?>
 
    </div>