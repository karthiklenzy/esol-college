<div class="loader"></div>
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog notification-modal">
    
      <!-- Modal content-->
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        
        <div class="modal-body notification"><img src="<?= HTTP_PATH; ?>images/list.png">
          <p style="color: green; font-weight: 600;float: left;padding-left: 15px;"><?php if (isset($sucessmessage_popup)) { echo $sucessmessage_popup; } ?></p>
        </div>
        
      </div>
      
    </div>
  </div>
<footer id="footer" class="fix" style="padding: 0px 0">
		<div class="container">
			
			<p class="copy">© <?php echo date('Y'); ?> - All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/js/lightgallery.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script> -->
	<!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="<?php echo HTTP_PATH; ?>js/plugins.js"></script>
	<script src="<?php echo HTTP_PATH; ?>js/main.js"></script>
	<script src="https://www.bootstrap-year-calendar.com/js/bootstrap-year-calendar.min.js"></script>
	<script type="text/javascript">
$(window).on('load', function(){
    $(".loader").fadeIn("slow").delay("1550").fadeOut("slow");
});

</script>
<!-- <script>
	document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
</script> -->
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>
    	$(function() {
		<?php if (isset($message_popup_success)) { ?>
			$('#myModal3').modal('show');
		<?php } ?>
    
});
</script>
</body>
</html>