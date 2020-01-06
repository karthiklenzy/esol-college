<?php 
$slider_data = $db->query("SELECT * FROM tbl_main_menu limit 6");
require_once DOC_ROOT.'classes/db_connection.php';
?>
<header id="header">
	<div class="container">
		<a href="<?php echo HTTP_PATH; ?>" id="logo" title="<?php echo SITE_NAME; ?>"><?php echo SITE_NAME; ?></a>
		<div class="menu-trigger"></div>
		<nav id="menu">
		   <ul>
		   <?php 
 			if ($slider_data) {
 				for ($i = 0; $i < count($slider_data) && $i < 3; $i++) { 
           ?>			
			<li>
			<?php if ($i == 1) {?>	
			<li class="dropdown">
			<?php } ?>
				<a href="<?php if ($i != 1) {echo HTTP_PATH.$slider_data[$i]['main_menu_link'];} else {echo "#";} ?>" <?php if ($i == 1) { echo 'class="dropdown-toggle" data-toggle="dropdown"'; } ?>><?php echo $slider_data[$i]['main_menu_name']; ?></a>
				
		    <?php if ($i == 1) {?>     
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo HTTP_PATH; ?>courses/schools">Schools</a></li>
		            <li><a href="<?php echo HTTP_PATH; ?>courses/tkt">General &amp; higher education</a></li>
		            
		          </ul>
		        </li>

			</li>
			<?php } ?>	
			<?php
				}
			?>
			</ul>
			 <ul>
			 <?php
			 	for ($i = 3; $i < count($slider_data) && $i >= 3; $i++) { 
			 ?>
				<li><a href="<?php echo HTTP_PATH.$slider_data[$i]['main_menu_link']; ?>"><?php echo $slider_data[$i]['main_menu_name']; ?></a></li>
			<?php
				}
			}
			?>
			
			 
			</ul>
			<!--<div><a href="<?php if (isset($_SESSION['studentid'])) { echo HTTP_PATH."library";} else {echo HTTP_PATH."library-login";} ?>"  title="Library"><img src="<?php echo HTTP_PATH; ?>images/monkey-2.png"></a></div>-->
		</nav>
		<!-- / navigation -->
	</div>
</header>
<script>
	  $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
</script>
