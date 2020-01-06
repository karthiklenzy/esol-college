<div id="fancy">
		<h2>Request information</h2>
		<form action="<?php echo HTTP_PATH;?>contact.php" method="post">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." name="useremail" type="text" ></fieldset>
				<?php if(isset($error_message)){
						echo $error_message;
					}?>
				<fieldset class="name"><input placeholder="Name..." name="username" type="text" ></fieldset>
				<fieldset class="subject">
					<select name="selectbranch" >
						<option value="">-- Select Branch --</option>
						<option>Hanwella</option>
						<option>Maharagama</option>
						<option>Malabe</option>
						<option>Battaramulla</option>
					</select>
				</fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..." name="userquestion"></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" name="send" id="send" type="submit">Send</button>
			</div>
		</form>
	</div>