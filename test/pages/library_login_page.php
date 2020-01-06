<div class="content" style="padding-bottom: 0px;background-color : #6ed3ff;background-image: url('images/backk-1.png');background-size: cover;">
	<div class="container-fluid" style="padding: 0;">
		
		<div class="col-md-6" style="height: auto">
			<section class="posts">
				<div class="login-page" style="width:100%">
					<div class="avatar">
							<img src="<?=HTTP_PATH; ?>images/cloud.png" width="width: 40%;" alt="" />
						</div>
						  <div class="form" style="max-width: 80%;margin-top: 5%;">
							  	<div class="styleforh3">
								<h3>E-Library</h3>
						  </div>
					    
					    <form class="bullet">
					      <ul>
					      	<li style="text-align: justify;">
					      	<figure class="quote">
								<blockquote class="quote__body">The ESOL College library is electronically facilitated for the access of all students, staff and parents of a public or private school. Our E-Library provides resources unmatched to any learning body available ensuring that all members of the schooling community have equitable access to books for eco-friendly reading, as a platform full of information. </blockquote>
							</figure>
					      		 
					      	</li>
					      	<li>
					      		 <p class="background-design">The students are encouraged to use the E-library as a supplementary education program that gives them knowledge on vocabulary expansion and comprehension skills that contributes for them to become articulate writers who know how to project their knowledge when answering exam questions. Constant using of the E-library would inspire students to read books apart from their course content that would result in sharpening them with much needed skills to excel in the language.</p>
					      	</li>
					      
					      </ul>
					      
					      
					    </form>
					  </div>
					  	
				</div>

			</section>
		</div>
		<div class="col-md-6" style="height: auto">
		  <section class="posts">
			<div class="login-page">
			  <div class="form">
			  	<div class="styleforh3">
				  <h3>Login / Register</h3>
				</div>
				<div class="register-form login" <?php if(isset($error_register) || isset($error_old_student_register)){ ?> style="display: block;" <?php } ?> >
				  <div class="tabbable-panel">
					<div class="tabbable-line">
					  <ul class="nav nav-tabs student">
					  	<li class="<?php if (!isset($error_old_student_register)) { echo "active";} ?>">
						  <a href="#tab_default_1" data-toggle="tab" class="register-student">
							New Student</a>
						</li>
						<li class="<?php if (isset($error_old_student_register)) { echo "active";} ?>">
							<a href="#tab_default_2" data-toggle="tab" class="register-student">
							Existing Student</a>
						</li>
					  </ul>
					<div class="tab-content">
						<div class="tab-pane <?php if (!isset($error_old_student_register)) { echo "active";} ?>" id="tab_default_1">
							<form id="newstudent" method="post">
						      <input type="text" placeholder="Name" value="<?php if (isset($new_student_name)) {echo $new_student_name;} ?>" name="new_student_name" required>
						      <input type="email" placeholder="Email address" name="new_student_email" required>
						      <input type="password" placeholder="Password" name="new_student_password" id="newstudent_password" required>
						      <input type="password" placeholder="Re-type password" id="newstudent_repassword" required>
						      <button type="submit" name="btn-new-studnt">Register</button>
						      <p class="message">Already registered? <a href="#">Sign In</a></p>
						      <?php if (isset($errorMessage)) {?>
				                <div class="alert alert-danger">
				                    <?php echo $errorMessage; ?>
				                </div>
				              <?php } ?>
						    </form>
						</div>
						<div class="tab-pane <?php if (isset($error_old_student_register)) { echo "active";} ?>" id="tab_default_2">
							<form id="exstudent" method="post">
						      <input type="text" placeholder="Name" name="old_student_name" value="<?php if (isset($old_student_name)) { echo $old_student_name;} ?>"  required>
						      <input type="text" placeholder="Student Id" name="old_student_id" required>
						      <input type="email" placeholder="Email" name="old_student_email" required>
						      <input type="password" placeholder="Password" name="old_student_password" id="oldstudent_password" required>
						      <input type="password" placeholder="Re-type password" id="oldstudent_repassword" required>
						      
						      <button type="submit" name="btn-ex-studnt">Register</button>
						      <p class="message">Already registered? <a href="#">Sign In</a></p>
						      <?php if (isset($errorMessage)) {?>
				                <div class="alert alert-danger">
				                    <?php echo $errorMessage; ?>
				                </div>
				              <?php } ?>    
						    </form>

						</div>
						
					</div>
				</div>
			</div>
					    </div>
					    <form class="login-form login" method="post" style="margin-bottom: 20px;  <?php if(isset($error_register) || isset($error_old_student_register)) { ?> display: none; <?php } ?> ">
					      <input type="email" name="user_email" placeholder="Email" required>
					      <input type="password" name="user_password" placeholder="Password" required>
					      <button name="btn-login" class="animated-button thar-three">login</button>
					      <p class="message">Not registered? <a href="#">Create an account</a></p>
					    </form>

					    	<?php if (isset($_COOKIE['SuccessMessage'])) {?>
			                <div class="alert alert-success">
			                    <?php echo $_COOKIE['SuccessMessage']; ?>
			                </div>
			                <?php } ?>

			                <?php if (isset($_COOKIE['ErrorMessage'])) {?>
			                <div class="alert alert-danger">
			                    <?php echo $_COOKIE['ErrorMessage']; ?>
			                </div>
			                <?php } ?>

			                <?php if (isset($_COOKIE['InfoMessage'])) {?>
			                <div class="alert alert-info">
			                    <?php echo $_COOKIE['InfoMessage']; ?>
			                </div>
			                <?php } ?>

					  </div>
					  <div class="avatar-2">
							<img src="<?=HTTP_PATH; ?>images/childs.png" width="width: 40%;" alt="" />
						</div>
				</div>
					
			</section>
		</div>
<div id="snackbar"><i class="fas fa-times"></i>&emsp;Password not matching</div>
<div id="snackbarempty"><i class="fas fa-times"></i>&emsp;Empty password not allowed</div>
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
<script>
	$('.message a').click(function(){
   $('.login').animate({height: "toggle", opacity: "toggle"}, "slow");
});
$(document).ready(function() {

  $('#example-1').progress_fnc();
  $('#example-2').progress_fnc();
  $('#example-3').progress_fnc();
  $('#example-4').progress_fnc();
  $('#example-5').progress_fnc();
  $('#example-6').progress_fnc();
  $('#example-7').progress_fnc();
  $('#example-8').progress_fnc();
  $('#example-9').progress_fnc();
  $('#example-10').progress_fnc();
  $('#example-11').progress_fnc();
  $('#example-12').progress_fnc();
  $('#example-13').progress_fnc();

  $('.progressStart').on('click', function() {
    var perent = $(this).closest("div").attr("id");
    $('#' + perent).progress_fnc({ type: 'start' });
  });

  $('.progressReset').on('click', function() {
    var perent = $(this).closest("div").attr("id");
    $('#' + perent).progress_fnc({ type: 'reset' });
  });

});


(function($) {

  $.fn.progress_fnc = function(options) {
    var settings = $.extend({
      type: 'start'
    }, options);

    var div = $(this);
    var progress = div.find('.cssProgress');

    progress.each(function() {
      var self = $(this);
      var progress_bar = self.find('.cssProgress-bar');
      var progress_label = self.find('.cssProgress-label1, .cssProgress-label1, .cssProgress-label1');
      var progress_value = progress_bar.data('percent');
      var percentage = parseInt(progress_value, 10) + '%';

      progress_bar.css({'width': '0%', 'transition': 'none', '-webkit-transition': 'none', '-moz-transition': 'none'});

      if(settings.type == 'start') {

        progress_bar.animate({
          width: percentage
        }, {
          duration: 5000,
          step: function(x) {
            progress_label.text(Math.round(x) + '%');
          }
        });

      } else if(settings.type == 'reset') {
        progress_bar.css('width', '0%');
        progress_label.text('0%');
      }

    });
  }

}(jQuery));
</script>
<script>
$(document).ready(function(){
	$("#newstudent").submit(function(){

		var new_student_password = $("#newstudent_password").val();
		var new_student_repassword = $("#newstudent_repassword").val();
		if (new_student_password != new_student_repassword) {
			passwordAlert();
	        return false;
		}
		if ($.trim($('#newstudent_password').val()) == '' || $.trim($('#newstudent_repassword').val()) == '') {
			emptyAlert();
	        return false;
		}

	});
	$("#exstudent").submit(function(){

		var new_student_password = $("#oldstudent_password").val();
		var new_student_repassword = $("#oldstudent_repassword").val();
		if (new_student_password != new_student_repassword) {
			passwordAlert();
	        return false;
		}
		if ($.trim($('#oldstudent_password').val()) == '' || $.trim($('#oldstudent_repassword').val()) == '') {
			emptyAlert();
	        return false;
		}

	});
});
function passwordAlert() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
function emptyAlert() {
  var x = document.getElementById("snackbarempty");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
</script>

<script>
	$(document).on('keypress','input','.form-control',function(e){

     if (e.which === 32 && !this.value.length)
        e.preventDefault();

    });
    
</script>


