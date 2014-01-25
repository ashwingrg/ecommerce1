<div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
      <?php foreach($all_category as $k=> $ac): ?>

        <li class="<?php  if($k%2==0){
          echo "odd";

        }
        else{
          echo "even";
        }
       ?> ?>">
          <a href="<?php echo site_url('home/category').'/'.$ac->category_id; ?>"><?php echo $ac->category_name; ?></a>
        </li>
      <?php endforeach; ?>
      </ul>
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title"><a href=""><?php echo $special_product->product_name; ?></a></div>
        <div class="product_img"><a href="#"><img src="<?php echo base_url('uploads') ?>/<?php echo $special_product->product_thumb_image; ?>" alt="" border="0" width="70" /></a></div>
        <div class="prod_price"><span class="reduce"><?php echo $special_product->product_price+500; ?></span> <span class="price"><?php echo $special_product->product_price; ?>Nrs.</span></div>
        <div class="prod_details_tab"> <a href="<?php echo site_url('home/cart/add'); ?>/<?php echo @ $special_product->product_id; ?>" class="prod_buy">Add to Cart</a> <a href="<?php echo site_url('home/productdetails').'/'.$special_product->product_id; ?>" class="prod_details">Details</a> </div>
      </div>
      
    </div>