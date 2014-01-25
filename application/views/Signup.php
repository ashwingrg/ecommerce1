<?php
    // include_once 'controllers/class.user.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	</head>
	<body>
    	<div class="signupbg">
        <h3>Welcome to db Sign Up page</h3>      
        <?php
        if(isset($msg)==1){
           ?> <div class="msg">New user added successfully.</div><?php
        }
        ?>       
    	<form class="well" style="padding:30px;" method="post" action="<?php echo base_url(); ?>signup">
        	<p>
        	<label for="username">Username:</label>
            <input type="text" name="nusername" id="nusername" class="span3" placeholder="Eg. ashwingrg" style="width:267px;">
            </p>
            <p>
            <label for="email">Email:</label>
            <input type="text" name="nemail" id="nemail" class="span3" placeholder="some1@mail.com" style="width:267px;">
            </p>
            <p>
            <label for="password">Password</label>
            <input type="password" name="npassword" id="npassword" class="span3" placeholder="Eg. Nep@42" style="width:267px;">
            </p>
            <label>Already an user?<a href="<?php echo base_url(); ?>Login">Log In</a></button></label>
            <input type="submit" class="btn btn-primary" value="Sign Up">
            <input type="reset" class="btn" value="Clear">
        
        </form>
        </div>

	</body>
</html>