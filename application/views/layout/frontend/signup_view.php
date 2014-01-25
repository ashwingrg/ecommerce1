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
    
	<form action="frontend/signup" method="post">
		<p>
		<label for=""><span class="title">Sign Up</span><!--<span class="signupnotify">Sign up successfully.</span>--></label>
		<br><br>
		</p>
		<p>
			<label for="name" class="intitle">Name:</label>
			<input type="text" name="fname" id="fname" placeholder="First Name">
			<input type="text" name="mname" id="mname" placeholder="Middle Name">
			<input type="text" name="lname" id="lname" placeholder="Last Name">
		</p>
		<p>
			<label for="email" class="intitle">Email:</label>
			<input type="text" name="email" id="email" size="20" placeholder="Email">
		</p>
		<p>
			<label for="phone" class="intitle">Phone:</label>
			<input type="text" name="phone" id="phone" placeholder="Phone">
		</p>
		<p>
			<label for="address" class="intitle">Address:</label>
			<input type="text" name="paddress" id="paddress" placeholder="Permanent Address">
			<input type="text" name="saddress" id="saddress" placeholder="Shipping Address">
		</p>
		<p>
			<label for="city" class="intitle">City:</label>
			<input type="text" name="city" id="city" placeholder="City" size="10">
			<label for="state" class="intitle">State:</label>
			<input type="text" name="state" id="state" placeholder="State" size="10">	
		</p>
		<p>
			<label for="country" class="intitle">Country:</label>
			<select name="country" id="country" style="color:#1177d4;">
  				<option value="nepal">Nepal</option>
  				<option value="india">India</option>
  				<option value="china">China</option>
  				<option value="us">U.S.</option>
			</select>
			<label for="zip" class="intitle">ZIP:</label>
			<input type="number" style="width:5em;" name="zip" id="zip">
		<p>
		<p>
			<label for="addressinfo" class="intitle">Address Info:</label>
			<input type="text" name="addressinfo" id="addressinfo" size="20" placeholder="Address Info">
		</p>
		<p>
			<label for="infotype" class="intitle">Info Type:</label>
			<input type="text" name="infotype" id="infotype" size="20" placeholder="User Info Type">
		</p>
		<p>
			<label for="password" class="intitle">Password:</label>
			<input type="password" name="password" id="password" size="20" placeholder="Password">
		</p>
		<pre class="intitle"><span style="text-decoration: underline;">Already a member?</span>  <a href="<?php echo site_url('home/login'); ?>" style="color: green; text-decoration: none; font-weight: bold;">Login</a></pre>
		<p>
			<input type="submit" value="Sign Up" style=" padding: 10px 10px 27px 10px; background:#3a9ef9; font-weight: bold; border-radius:5px; color:white; cursor:pointer;">
		</p>
	</form>
 	
    </div>