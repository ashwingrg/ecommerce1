
 <div class="center_content">
      <div class="center_title_bar"><?php echo $prod_detail['product_name']; ?></div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <div class="product_img_big"> <a href="" title=""><img src="<?php echo base_url() ?>uploads/<?php echo $prod_detail['product_thumb_image'];?> " alt="" border="0" width="130"/></a>
            
          </div>
          <div class="details_big_box">
            <div class="product_title_big"><?php echo $prod_detail['product_name']; ?></div>
            <div class="specifications"> Available: <span class="blue">In stock</span><br />
              Warranties: <span class="blue">24 months</span><br />
              Transport: <span class="blue"> delivery services company</span><br />
              Include :<span class="blue"> TVA</span><br />
              Description :<span class="blue"><?php echo $prod_detail['product_desc']; ?></span><br />
            </div>
            <div class="prod_price_big"><span class="reduce"><?php echo $prod_detail['product_price']+500; ?></span> <span class="price"><?php echo $prod_detail['product_price']; ?></span></div>
            <a href="http://www.free-css.com/" class="prod_buy">add to cart</a> <a href="http://www.free-css.com/" class="prod_compare">compare</a> </div>
        </div>
      </div>
    </div>