
 <!-- end of left content -->

    <div class="center_content">
      <div class="oferta"> <img src="<?php echo base_url(); ?>uploads/<?php echo $getLatestProductHead->product_thumb_image; ?>" width="90" height="130" border="0" class="oferta_img" alt="" />
        <div class="oferta_details">
          <div class="oferta_title"><?php echo $getLatestProductHead->product_name; ?></div>
          <div class="oferta_text"> <?php //echo $getLatestProductHead->product_desc; ?> </div>
          <a href="<?php echo site_url('home/productdetails')."/".$getLatestProductHead->product_id; ?>" class="prod_buy">details</a> </div>
      </div>
      <div class="center_title_bar">Latest Products</div>
      <?php foreach($all_latest_product as $alp): ?>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#"><?php echo $alp->product_name; ?></a></div>
          <div class="product_img"><a href="#"><img src="<?php echo base_url(); ?>uploads/<?php echo $alp->product_thumb_image; ?>" alt="" border="0" width="60" height="100" /></a></div>
          <div class="prod_price"><span class="reduce"><?php echo $alp->product_price+100; ?>Nrs.</span> <span class="price"><?php echo $alp->product_price; ?>Nrs.</span></div>
        </div>
        <div class="prod_details_tab"> <a href="<?php echo site_url('home/cart/add'); ?>/<?php echo $alp->product_id; ?>" class="prod_buy">Add to Cart</a> <a href="<?php echo site_url('home/productdetails').'/'.$alp->product_id; ?>" class="prod_details">Details</a> </div>
      </div>
    <?php endforeach; ?>
 
    </div>