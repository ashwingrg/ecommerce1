</div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer"> <img src="<?php echo base_url(); ?>assets/images/footer_logo.png" alt="" width="89" height="42"/> </div>
    <div class="center_footer"> Template name. All Rights Reserved 2008<br />
      <a href="http://csscreme.com"><img src="<?php echo base_url(); ?>assets/images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
      <img src="<?php echo base_url(); ?>assets/images/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="http://www.free-css.com/">home</a> <a href="http://www.free-css.com/">about</a> <a href="http://www.free-css.com/">sitemap</a> <a href="http://www.free-css.com/">rss</a> <a href="http://www.free-css.com/">contact us</a> </div>
  </div>
</div>
<!-- end of main_container -->


<script>

$(document).ready(function(){
  $('a.prod_buy').on('click',function(e){
    e.preventDefault();

    url = $(this).attr('href');

    $.post(url,function(res){

      if(res==0){
        alert('This item already exist in cart');
        return false;
      }
        parsedata = $.parseJSON(res);
       price = parsedata[0];
       noitem = parsedata[1];

       $('.noitem').html(noitem);
       $('.price-cart').html(price);
    })


  })
})
	
</script>
</body>
</html>
