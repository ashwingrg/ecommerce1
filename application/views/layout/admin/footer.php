<?php $sessarray = $this->session->userdata('userinfo'); ?>
<div id="topNav">
         <ul>
            <li>
                <span style="color:#FFF;">Welcome, </span><a href="#menuProfile" class="menu" style="font-size:12px;"><?php echo @ $sessarray->email; ?></a>
                
                <div id="menuProfile" class="menu-container menu-dropdown">
                    <div class="menu-content">
                        <ul class="">
                            <li><a href="javascript:;">Edit Profile</a></li>
                            <li><a href="javascript:;">Edit Settings</a></li>
                            <li><a href="javascript:;">Suspend Account</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="<?php echo site_url('admin/logout'); ?>">Logout</a></li>
         </ul>
    </div> <!-- #topNav -->

    
    
</div> <!-- #wrapper -->

<div id="footer">
    Copyright &copy; 2012, MadeByAmp Themes.
</div>

<script src="<?php echo base_url(); ?>assets/javascripts/all.js"></script>

</body>
</html>