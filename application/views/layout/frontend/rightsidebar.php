<?php 
$qty = 0;
$totalprice = 0;
if(count(@$_SESSION['NB_CART'])>0){
  foreach(@$_SESSION['NB_CART'] as $nc){
    if($nc['product_qty']>0){
      $qty = $qty+$nc['product_qty'];
      $totalprice = $totalprice + $nc['product_qty']*$nc['product_price'];
    }
    else {
      $qty = $qty+1;
      $totalprice = $totalprice+$nc['product_price'];
    }
    //$totalprice = $totalprice+ @ $nc['product_price'];
  }
}
 ?>
 <!-- end of center content -->
    <div class="right_content">
      <div class="title_box">Search</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="keyword"/>
        <a href="http://www.free-css.com/" class="join">search</a> </div>
      <div class="shopping_cart">
        <div class="title_box"><a href="<?php echo site_url('cart/displayAll'); ?>">Shopping cart</a></div>
        <div class="cart_details"> <span class="noitem"><?php echo count(@$_SESSION['NB_CART']); ?></span> items <br />
          <span class="border_cart"></span> Total: <span class="price-cart"> <?php echo $totalprice ?></span>$ </div>
        <div class="cart_icon"><a href="<?php echo site_url('home/cart/displayAll'); ?>"><img src="<?php echo base_url(); ?>assets/images/shoppingcart.png" alt="" width="35" height="35" border="0" title="Cart Details" /></a></div>
      </div>
      <div class="title_box">What's new</div>
      <div class="border_box">
        <div class="product_title"><a href="http://www.free-css.com/"><?php echo $newproduct->product_name; ?></a></div>
        <div class="product_img"><a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>uploads/<?php echo $newproduct->product_thumb_image; ?> " alt="" border="0" height="100" width="60" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Sub Categories</div>
      <?php foreach ($all_sub_category as $k=>$rs): ?>
      <ul class="left_menu">
        <li class="
        <?php 
        if($k%2==0){
          echo "odd";
        }
        else{ echo "even"; }
         ?>
        }
        "><a href="<?php echo site_url('home/subproducts').'/'.$rs->subcategory_id; ?>"><?php echo @ $rs->subcategory_name; ?></a></li>
      </ul>
      <?php endforeach; ?>
      <br>
    </div>