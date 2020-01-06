<?php
require_once DOC_ROOT.'classes/mailing.class.php';
require_once DOC_ROOT.'classes/db_connection.php';

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
	$usernumber = filter_var($_POST['usernumber'], FILTER_SANITIZE_STRING);
	$current_date = date("Y-m-d");

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
	


	if ($error_count == 0) {
   
            $inquiry_array = array('username' => $username, 'user_mail' => $useremail, 'user_number' => $usernumber, 'user_message' => $userquestion, 'cur_date' => $current_date, 'branch' => $selectbranch);
			$inquiry_sql = $db->query("INSERT INTO tbl_inquiry (inquiry_user_name, inquiry_user_email, inquiry_user_number, inquiry_user_message, inquiry_date, inquiry_branch) VALUES (:username, :user_mail, :user_number, :user_message, :cur_date, :branch)",$inquiry_array);
				
				$to = "karthiklenzy@gmail.com";
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
$event_details = $db->query("SELECT event_id, event_name, event_url FROM tbl_events ORDER BY event_order ASC LIMIT 4");

?>

<footer id="footer">
		<div class="container">
			<section>
				<div class="row">
				<article class="col-md-3 col-xs-6">
					<h3>Contact</h3>
					<ul class="footercontents">
					    <?php 
					    	for ($i=0; $i < count($item_link); $i++) { 
					    		$link_name = filter_var($item_link[$i]['link_name'], FILTER_SANITIZE_STRING);
					    		$link_url = filter_var($item_link[$i]['link_url'], FILTER_SANITIZE_STRING);

					    ?>

						<li><a href="<?php echo HTTP_PATH; ?>contact-us/#<?php echo $link_url;?>" class="arrow"><?php echo $link_name;?></a></li>
						

						<?php 
							}

						?>
					</ul>
				</article>
				<article class="col-md-3 col-xs-6">
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

				<article class="col-md-3 col-xs-6">
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
				<article class="col-md-3 col-xs-6">
					<h3>Latest News</h3>
					<ul class="footercontents">
					<?php if ($event_details) {
					for ($i=0; $i < count($event_details); $i++) { 
						
						$news_name = substr($event_details[$i]['event_name'], 0, 24);
						$event_link = $event_details[$i]['event_url'];
						$event_id = $event_details[$i]['event_id'];
					?>
                    
					
					<li class="facebook"><a href="<?php echo HTTP_PATH;?>events?eventtitle=<?php echo $event_link; ?>&eventid=<?php echo $event_id; ?>"><?php echo $news_name; ?></a></li>
					<?php
						}
					}
					 ?>	
					
					</ul>
				</article>
				</div>
			</section>
			<p class="copy">© <?php echo date('Y'); ?> - All rights reserved.</p>
		</div>
		<!-- / container -->
		<?php
		
		function isMobilee() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
		 if(!isMobilee()){ ?>
		<img src="<?php echo HTTP_PATH; ?>images/green.png" style="bottom: 0;float: left;display: inline-block;position: fixed;width:8%;-webkit-filter: drop-shadow(5px 5px 5px #222);
    filter: drop-shadow(1px 5px 5px #222);">
		<?php }  ?>
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
  <!-- modal -->
	<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog notification-modal">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body notification"><img src="<?= HTTP_PATH; ?>images/list.png">
          <p style="color: green; font-weight: 600;float: left;padding-left: 15px;">Succesfully Registered. We will get back to you shortly.!</p>
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
				<fieldset class="number"><input placeholder="Contact number" name="usernumber" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" required></fieldset>
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
				<fieldset class="question"><textarea placeholder="Question..." name="userquestion" rows="4" cols="50" maxlength="230" required></textarea></fieldset>
				
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
		<?php if ($_GET['modal']){ ?>
			$('#myModal3').modal('show');
		<?php unset($_GET['modal']);} ?>
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
<script>
    window.onresize = function (event) {
    console.log('resizing!');
    console.log(`new size: w${window.innerWidth} h${window.innerHeight}`);
    if(window.innerWidth < 777) {
        // do something
    }
    if(window.innerWidth > window.innerHeight) {
        // do something
    }
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151549329-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151549329-1');
</script>
<script>
	var particles= document.getElementById("particles");

function main(){
    var np = document.documentElement.clientWidth / 29;
    particles.innerHTML = "";
    for (var i = 0; i < np; i++) {
        var w = document.documentElement.clientWidth;
        var h = document.documentElement.clientHeight;
        var rndw = Math.floor(Math.random() * w ) + 1;
        var rndh = Math.floor(Math.random() * h ) + 1;
        var widthpt = Math.floor(Math.random() * 8) + 3;
        var opty = Math.floor(Math.random() * 5) + 2;
        var anima = Math.floor(Math.random() * 12) + 8;

        var div = document.createElement("div");
        div.classList.add("particle");
        div.style.marginLeft = rndw+"px";
        div.style.marginTop = rndh+"px";
        div.style.width = widthpt+"px";
        div.style.height = widthpt+"px";
        div.style.background = "white";
        div.style.opacity = opty;
        div.style.animation = "move "+anima+"s ease-in infinite ";
        particles.appendChild(div);
    }
}
window.addEventListener("resize", main);
window.addEventListener("load", main);

</script>

</body>
</html>