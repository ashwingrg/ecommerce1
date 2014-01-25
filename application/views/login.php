

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <title>Canvas Admin - Login</title>

    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />       
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/reset.css" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/text.css" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/login.css" type="text/css" media="screen" title="no title" />
</head>

<body>

<div id="login">
    <!-- <h1>Dashboard</h1> -->
    <h2 style="color:#0e66b7;">Ecommerce Admin</h2>
    <div id="login_panel">
        <form action="<?php echo site_url('admin'); ?>" method="post" accept-charset="utf-8">       
            <div class="login_fields">
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="" id="email" tabindex="1" placeholder="email@example.com" />     
                </div>
                
                <div class="field">
                    <label for="password">Password <small><a href="javascript:;">Forgot Password?</a></small></label>
                    <input type="password" name="password" value="" id="password" tabindex="2" placeholder="password" />            
                </div>
            </div> <!-- .login_fields -->
            
            <div class="login_actions">
                <button type="submit" class="btn btn-primary" tabindex="3">Login</button>
            </div>
        </form>
    </div> <!-- #login_panel -->        
</div> <!-- #login -->

<script src="assets/javascripts/all.js"></script>


</body>
</html>