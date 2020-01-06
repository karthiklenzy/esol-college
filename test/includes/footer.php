<?php
require_once DOC_ROOT.'classes/mailing.class.php';

if(isset($_POST['send'])) {
	$error_count = 0;
	$error_message1 = "";
	$error_message2 = "";
	$error_message3 = "";
	$error_message4 = "";

	$useremail = filter_var($_POST['useremail'], FILTER_SANITIZE_STRING);
	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$selectbranch = filter_var($_POST['selectbranch'], FILTER_SANITIZE_STRING);
	$userquestion = filter_var($_POST['userquestion'], FILTER_SANITIZE_STRING);

	if($useremail == "") {
		$error_count++;
		$error_message1 .= "Email is required.!";
	}
	if($username == "") {
		$error_count++;
		$error_message2 .= "Name is required.!";
	}
	if($selectbranch == "") {
		$error_count++;
		$error_message3 .= "Branch is required.!";
	}
	if($userquestion == "") {
		$error_count++;
		$error_message4 .= "Inquiry is required.!";
	}
	if ($selectbranch == "Hanwella") {
		$to = "umeshika@esol.lk";
	}
	if ($selectbranch == "Maharagama") {
		$to = "ranshitha@esol.lk";

	}
	if ($selectbranch == "Malabe") {
		$to = "kevin@esol.lk";
	}
	if ($selectbranch == "Battaramulla") {
		$to = "nimasha@esol.lk";
	}


	if ($error_count == 0) {
   
// 			$adminemails = array('naflin456@gmail.com','naflin566@gmail.com');
// 			for ($i=0; $i < count($adminemails); $i++) { 
// 				$to = $adminemails[$i];
				$email = "online-system@esol.lk";
				$subject = "Inquiry form submission | ".SITE_NAME;
				$the_heading = $subject;
                
				 include DOC_ROOT.'includes/inquiry-email-template-admin.php';  
				 include DOC_ROOT.'includes/inquiry-email-template.php';

				$send =mailing::html_mail($to,$subject,$the_message_to_be_sent,$email);
				$send =mailing::html_mail($useremail,$subject,$the_message_to_be_sent_inquiry,$email);
				/* -------- DELETE ON LIVE -------------- */
				// $message_success = 1;
				// $sucessmessage = "Thank you for your feedback / inquiry. We will get back to you shortly.!";
				/* -------- // DELETE ON LIVE -------------- */

				if ($send) {
					$message_success = 1;
					$sucessmessage = "Thank you for your feedback / inquiry. We will get back to you shortly.!";

					//echo $sucessmessage;
				}else{
					/*echo "Mailer Error: " . $mail->ErrorInfo;*/					
					//echo "No";
				}
// 			}
	}
}

if ((isset($error_count)) && ($error_count != 0)) {?>
	<style type="text/css">
		/*#fancy{
			display : block;
			overflow: visible;
			
		}*/
	</style>
<?php }
?>

<?php 
$item_link = $db->query("SELECT * FROM tbl_footer_contact_links");
// $social_link = $db->query("SELECT * FROM tbl_footer_social_link");
$forum_link = $db->query("SELECT * FROM tbl_footer_forum_links");
$social_data_array = array('activestatus' => "1");
$social_data_count = $db->query("SELECT social_id, social_name, social_link FROM tbl_footer_social_link WHERE social_status = :activestatus", $social_data_array);
$news_details = $db->query("SELECT news_heading, news_url FROM tbl_news WHERE news_status = 1");

?>

<footer id="footer">
		<div class="container">
			<section>
				<article class="col-md-3">
					<h3>Contact</h3>
					<ul class="footercontents">
					    <?php 
					    	for ($i=0; $i < count($item_link); $i++) { 
					    		$link_name = filter_var($item_link[$i]['link_name'], FILTER_SANITIZE_STRING);
					    		$link_url = filter_var($item_link[$i]['link_url'], FILTER_SANITIZE_STRING);

					    ?>

						<li><a href="<?php echo HTTP_PATH; ?>contact/#<?php echo $link_url;?>" class="arrow"><?php echo $link_name;?></a></li>
						

						<?php 
							}

						?>
					</ul>
				</article>
				<article class="col-md-3">
					<h3>Forum topics</h3>
					<ul class="footercontents">
					<?php
					if ($forum_link) {
					for ($i=0; $i < count($forum_link); $i++) { 
						$forum_name = filter_var($forum_link[$i]['forum_name'],FILTER_SANITIZE_STRING);
						$forum_link_url = $forum_link[$i]['forum_link'];
					
					 ?>
						<li><a href="<?php echo HTTP_PATH.$forum_link_url; ?>"><?php echo $forum_name; ?></a></li>

						<?php 
					}}
						?>
						<!-- <li><a href="#">What Our Parent Say...</a></li>
						<li><a href="#">Popular Courses </a></li> -->
						<!-- <li><a href="#">Ipsa quae ab illo inventore veritatis </a></li>
						<li class="last"><a href="#">Architecto beatae vitae dicta sunt </a></li> -->
					</ul>
				</article>
				<article class="col-md-3">
					<h3>Social media</h3>
					<ul class="footercontents">
					<?php if ($social_data_count) {
					for ($i=0; $i < count($social_data_count); $i++) { 
						$social_name = $social_data_count[$i]['social_name'];
						$social_link = $social_data_count[$i]['social_link'];
					?>
                    
					
					<li class="facebook"><a href="<?php echo $social_link; ?>" target="_blank"><?php echo $social_name; ?></a></li>
					<?php
						}
					}
					 ?>	
					
					</ul>
				</article>
				<article class="col-md-3">
					<h3>Latest News</h3>
					<ul class="footercontents">
					<?php if ($news_details) {
					for ($i=0; $i < count($news_details); $i++) { 
						
						$news_name = substr($news_details[$i]['news_heading'], 0, 15);
						$news_link = $news_details[$i]['news_url'];
					?>
                    
					
					<li class="facebook"><a href="<?php echo HTTP_PATH.'read-more/'.$news_link; ?>"><?php echo $news_name; ?></a></li>
					<?php
						}
					}
					 ?>	
					
					</ul>
				</article>
			</section>
			<p class="copy">© <?php echo date('Y'); ?> - All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->
	<!-- modal -->
	<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog notification-modal">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body notification"><img src="<?= HTTP_PATH; ?>images/list.png">
          <p style="color: green; font-weight: 600;float: left;padding-left: 15px;"><?php if (isset($sucessmessage)) { echo $sucessmessage; } ?></p>
        </div>
        
      </div>
      
    </div>
  </div>
  <!-- modal end -->
	<div id="fancy">
		<h2>Request information</h2>
		<form action="" method="post">
			<div class="left">
				<?php if(isset($error_message1)){
						echo $error_message1;
					}?>
				<fieldset class="mail"><input placeholder="Email address..." name="useremail" type="email" id="validate-email" autocomplete="off" required></fieldset>

				<?php if(isset($error_message2)){
						echo $error_message2;
					}?>
				<fieldset class="name"><input placeholder="Name..." name="username" type="text" required></fieldset>
				<?php if(isset($error_message3)){
						echo $error_message3;
					}?>
				<fieldset class="subject">
					<select name="selectbranch" required>
						<option value="">-- Select Branch --</option>
						<option value="Hanwella">Hanwella</option>
						<option value="Maharagama">Maharagama</option>
						<option value="Malabe">Malabe</option>
						<option value="Battaramulla">Battaramulla</option>
					</select>
				</fieldset>
				
			</div>
			<div class="right">
				<?php if(isset($error_message4)){
						echo $error_message4;
					}?>
				<fieldset class="question"><textarea placeholder="Question..." name="userquestion" required></textarea></fieldset>
				
			</div>
			<div class="btn-holder">
				<button class="btn blue" name="send" id="send">Send</button>
			</div>
		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/js/lightgallery.js"></script>
	<script>
$(document).ready(function() {
  $('#lightgallery').lightGallery({
    pager: true
  });
});

</script>


	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script> -->
	<!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="<?php echo HTTP_PATH; ?>js/plugins.js"></script>
	<script src="<?php echo HTTP_PATH; ?>js/main.js"></script>
	<script src="https://www.bootstrap-year-calendar.com/js/bootstrap-year-calendar.min.js"></script>
	<script type="text/javascript">
$(window).on('load', function(){
    $(".loader").fadeIn("slow").delay("1050").fadeOut("slow");
});
</script>
<!-- <script>
	document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
</script> -->
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script type="text/javascript">
	$(function() {
		<?php if (isset($message_success)) { ?>
			$('#myModal2').modal('show');
		<?php } ?>
    // Just one method to add a date picker!
    $( "#myDatePicker" ).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true, yearRange: "-100:+0"}); 
});
	$("#myDatePicker").attr('readonly', 'readonly');

	<?php if (!isset($_SESSION['intake_banner'])) { ?>
	  $(window).on('load', function(){
	   setTimeout(function(){
	     $('#myModal').modal('show');
	   }, 3000);
	  });
	<?php $_SESSION['intake_banner'] = "Yes";  }?>
</script>
<script>
    window.oncontextmenu = function () {
            return false;
        }
        $(document).keydown(function (event) {
            if (event.keyCode == 123) {
                return false;
            }
            else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
                return false;
            }
        });
</script>
</body>
</html>