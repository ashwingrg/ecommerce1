<style>
 table { color: #333; font-family: Arial;  width: 587px; border-collapse: collapse; border-spacing: 0; margin-top: 50px; margin-left: 5px; }
td, th { border: 1px solid #CCC; height: 30px; }
th { background: #F3F3F3;font-weight: bold; font-size: 13px; color: #159dcc;}
td { background: #FAFAFA; text-align: center; font-size: 12px;}
input { width: 35px; outline: none;}
input[type=submit] { word-wrap:break-word; width: 60px; cursor: pointer; }
input[type=button] { word-wrap:break-word; width: 63px; cursor: pointer; }
</style>

 <div class="center_content">
      <div class="center_title_bar">All Items</div>
    <table border="1">
      <thead>
        <tr>
          <th>Product Name</th>
          <th width="70;">Product Quantity</th>
          <th>Product price</th>
          <th>Total Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      //print_r(@$_SESSION['NB_CART']);
      $totalprice =0;
      if(count(@$_SESSION['NB_CART'])>0){
        foreach(@$_SESSION['NB_CART'] as $key=> $nc): 
        //$totalprice = $totalprice+ @ $nc['product_price'];
        ?>
        <form action="<?php echo site_url('home/cart/cartUpdate').'/'.$key; ?>" method='POST'>
        <tr>
          <td><?php echo @ $nc['product_name']; ?></td>
          <td><input type="text" name="qty" id="qty" value="<?php 
            if(@$nc['product_qty']>0){
              echo @$nc['product_qty'];
            }
            else {
              echo 1;
            }
          ?>
          "></td>
          <td><?php echo @$nc['product_price']; ?></td>
          <td><?php  
            if(@$nc['product_qty']>0){
              $tprice = @$nc['product_qty'] * @$nc['product_price'];
              echo $tprice;
              $totalprice = $totalprice + $tprice;
            }
            else {
              echo @$nc['product_price'];
              $totalprice = $totalprice + @$nc['product_price'];
            }

          ?></td>
          <td>
          <input type="submit" value="Update Item">

          <input type="button" value="Remove Item" onclick="window.location.href='<?php echo site_url('home/cart/cartDelete').'/'.$key ?>';">
          </form>
        </tr>
      <?php endforeach; }?>
      </form>
      <tr>
        <th colspan="2">Grand Total</th>
        <th colspan="2"><?php echo $totalprice; ?> $</th>
        <th><input type="button" onclick="window.location.href='<?php echo site_url('home/cart/checkOut'); ?>';" value="CheckOut" style="width: 80px; height: 30px; background: #c4d8df; border: 1px solid #60686a;"></th>
      </tr>
      </tbody>
    </table>

    </div>