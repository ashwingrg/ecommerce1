<style>
	.title {font-family: arial; font-size: 20px; color: #f56729; font-weight: bold;}
	.intitle {font-family: arial; font-size: 14px; color: #1177d4;}
	.wid { width: 50px;}
	form {border:1px solid #6e9bc4; padding: 7px; border-radius:7px;}
	input { margin-top: 10px; font-family: arial; font-size: 13px; height: 20px; color: #4b4f53;
	-webkit-transition: all 0.30s ease-in-out;-moz-transition: all 0.30s ease-in-out;-ms-transition: all 0.30s ease-in-out;-o-transition: all 0.30s ease-in-out;outline: none;padding: 3px 0px 3px 3px;margin: 5px 1px 3px 0px;border: 1px solid #DDDDDD;}
	input:focus {  box-shadow: 0 0 2px rgba(81, 203, 238, 1);}
	select { height: 27px;}
	.signupnotify {border: 1px solid #1e609b; padding:8px 60px 8px 60px; font-family: arial; font-size: 15px; margin-left: 15px; color:#267bc8;}
</style>

 <!-- end of left content -->
    <div class="center_content">
    <span style="font-size:14px; padding: 10px; color:red;">
    	<?php if($this->session->flashdata('invlogin')){
    		echo $this->session->flashdata('invlogin');
    		} ?>
    </span>
    <form action="<?php echo current_url(); ?>" method="post">
		<p>
		<label for=""><span class="title">Login</span></label>
		<br><br>
		</p>
		<p>
			<label for="email" class="intitle">Email:</label>
			<input type="text" name="email" id="email" placeholder="someone@gmail.com">
		</p>
		<p>
			<label for="password" class="intitle">Password:</label>
			<input type="password" name="password" id="password" placeholder="wx@yb1">
		</p>
		<pre class="intitle"><span style="text-decoration: underline;">Not a member yet?</span>  <a href="<?php echo site_url('home/signup'); ?>" style="color: green; text-decoration: none; font-weight: bold;">Sign Up</a></pre>
		<p>
			<input type="submit" value="Login" style=" padding: 8px 12px 25px 12px; background:#3a9ef9; font-weight: bold; border-radius:5px; color:white; cursor:pointer;">
		</p>
	</form><br>
	
 	
    </div>