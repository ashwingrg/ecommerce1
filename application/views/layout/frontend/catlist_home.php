
 <!-- end of left content -->
    <div class="center_content">
      
      <div class="center_title_bar">All
      <?php $d=$this->uri->segment(3);
          if($d==46){
            echo "Mobiles";
          }
          elseif ($d==47) {
            echo "Laptops";
          }
          elseif ($d==48) {
            echo "Cameras";
          }
          elseif ($d==49) {
            echo "Tablets";
          }
      ?> </div>
      <?php foreach($items as $alp): ?>
      <div class="prod_box">
        <div class="center_prod_box">
          <div class="product_title"><a href="#"><?php echo $alp->product_name; ?></a></div>
          <div class="product_img"><a href="#"><img src="<?php echo base_url(); ?>uploads/<?php echo $alp->product_thumb_image; ?>" alt="" border="0" width="60" height="100" /></a></div>
          <div class="prod_price"><span class="reduce"><?php echo $alp->product_price+100; ?>Nrs.</span> <span class="price"><?php echo $alp->product_price; ?>Nrs.</span></div>
        </div>
        <div class="prod_details_tab"> <a href="<?php echo site_url('home/cart/add'); ?>/<?php echo $alp->product_id; ?>" class="prod_buy">Add to Cart</a> <a href="<?php echo site_url('home/productdetails').'/'.$alp->product_id; ?>" class="prod_details">Details</a> </div>
      </div>
    <?php endforeach; ?>
    
    
 <?php echo $pagination; ?>
    </div>