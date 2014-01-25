<?php session_start(); 
  $sessarray = $this->session->userdata('userinfo');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gadget Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script src="<?php echo base_url(); ?>/assets/javascripts/jquery-1.7.1.min.js"</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div id="header">
    <div class="top_right">
      <div class="languages">
        <div class="lang_text">Languages:</div>
        <a href="http://www.free-css.com/" class="lang"><img src="<?php echo base_url(); ?>assets/images/en.gif" alt="" border="0" /></a> <a href="http://www.free-css.com/" class="lang"><img src="<?php echo base_url(); ?>assets/images/de.gif" alt="" border="0" /></a> </div>
      <div class="big_banner"> <a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>assets/images/banner728n.jpg" alt="" border="0" /></a> </div>
    </div>
    <div id="logo"> <a href="http://www.free-css.com/"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" border="0" width="182" height="85" /></a> </div>
  </div>
  <?php if ($sessarray){ ?>
    <span style = "margin-right: 10px; float: right; font-family: arial; font-size: 12px;">Welcome, <?php echo $sessarray->email; ?></span>
  <?php } ?>
  <div id="main_content">
    <div id="menu_tab">
      <ul class="menu">
        <li><a href="<?php echo site_url('home'); ?>" class="nav"> Home </a></li>
        <li class="divider"></li>
        <li><a href="<?php echo site_url('home/aboutus'); ?>" class="nav">About Us</a></li>
        <li class="divider"></li>
        <li><a href="http://www.free-css.com/" class="nav">Products</a></li>
        <li class="divider"></li>
        <li><a href="http://www.free-css.com/" class="nav">Specials</a></li>
        <li class="divider"></li>
        <li><a href="http://www.free-css.com/" class="nav">My account</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo site_url('home/login'); ?>" class="nav">Login</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo site_url('home/signup'); ?>" class="nav">Sign Up</a></li>
        <li class="divider"></li>
        <li><a href="contact.html" class="nav">Contact Us</a></li>
        <!-- <li class="divider"></li>
        <li><a href="<?php// echo site_url('home/cart/displayAll'); ?>" class="nav">Cart Details</a></li> -->

        <?php 
          if($sessarray){
            ?> 
              <li class="divider"></li>
              <li><a href="<?php echo site_url('home/logout'); ?>" class="nav">Logout</a></li>
            <?php 
          }
         ?>
        
      </ul>
    </div>
    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current"></span> </div>